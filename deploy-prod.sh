#!/bin/bash

# Hentikan script jika ada error
set -e

echo "--- Rebuilding Production Image ---"
sudo podman build -t laravel-prod .

echo "--- Restarting Container ---"
sudo podman rm -f app-prod || true
sleep 2

# 🚀 LANGKAH 1: INISIALISASI HOST STORAGE (Sebelum Container Naik)
echo "--- Initializing Storage Permissions on Host ---"
# Pastikan semua folder esensial (termasuk folder private filament export) terbentuk di host
sudo mkdir -p /home/ubuntu/applications/prod/onlinebersama/storage/framework/views
sudo mkdir -p /home/ubuntu/applications/prod/onlinebersama/storage/framework/cache
sudo mkdir -p /home/ubuntu/applications/prod/onlinebersama/storage/framework/sessions
sudo mkdir -p /home/ubuntu/applications/prod/onlinebersama/storage/logs
sudo mkdir -p /home/ubuntu/applications/prod/onlinebersama/storage/app/private/filament_exports

# Hapus log harian yang mungkin terkunci oleh sisa error/crash sebelumnya
sudo rm -f /home/ubuntu/applications/prod/onlinebersama/storage/logs/laravel-$(date +%Y-%m-%d).log || true

# Berikan hak akses penuh (777) agar saat volume di-mount, UID container langsung punya izin
sudo chmod -R 777 /home/ubuntu/applications/prod/onlinebersama/storage
sudo chown -R www-data:www-data /home/ubuntu/applications/prod/onlinebersama/storage || true

echo "--- Starting Podman Container ---"
# Jalankan container di port 8081, mount .env dan storage
sudo podman run -d \
  --name app-prod \
  -p 8081:9000 \
  --restart always \
  -v /home/ubuntu/applications/prod/onlinebersama/.env:/var/www/html/.env:Z \
  -v /home/ubuntu/applications/prod/onlinebersama/storage:/var/www/html/storage:Z \
  laravel-prod

# 🚀 LANGKAH 2: PERKUAT PERMISSION (Tepat Setelah Volume Ter-Mount)
# Wajib dilakukan sebelum Artisan menyentuh apapun untuk mencegah Permission Denied
sudo chmod -R 777 /home/ubuntu/applications/prod/onlinebersama/storage
sudo chown -R www-data:www-data /home/ubuntu/applications/prod/onlinebersama/storage || true

echo "--- Extracting Static Assets to Host ---"
# Buat folder sementara untuk aset
sudo mkdir -p /home/ubuntu/applications/prod/onlinebersama/public/build
sudo mkdir -p /home/ubuntu/applications/prod/onlinebersama/public/vendor

# Buka akses untuk user host menyalin data
sudo chown -R ubuntu:ubuntu /home/ubuntu/applications/prod/onlinebersama/public

# Copy folder build dari dalam container ke host
sudo podman cp app-prod:/var/www/html/public/build /home/ubuntu/applications/prod/onlinebersama/public/

echo "--- Clear Existing Caches ---"
# 🚀 PENTING: Bersihkan cache total DULU SEBELUM aset Filament/Livewire di-publish
sudo podman exec app-prod php artisan optimize:clear

echo "--- Publishing Filament & Livewire Assets ---"
sudo podman exec app-prod php artisan filament:assets
sudo podman exec app-prod php artisan livewire:publish --assets

# Copy folder vendor dari container ke host
sudo podman cp app-prod:/var/www/html/public/vendor /home/ubuntu/applications/prod/onlinebersama/public/

# KEMBALIKAN PERMISSION: Beri Nginx (www-data) hak akses keamanan standar untuk /public
sudo chown -R www-data:www-data /home/ubuntu/applications/prod/onlinebersama/public
sudo chmod -R 755 /home/ubuntu/applications/prod/onlinebersama/public

echo "--- Optimizing Laravel for Production (Safe Caching) ---"
# Karena optimize:clear sudah dilakukan, aman untuk melakukan re-cache rute & config
sudo podman exec app-prod php artisan migrate --force
sudo podman exec app-prod php artisan config:cache
sudo podman exec app-prod php artisan route:cache
sudo podman exec app-prod php artisan view:cache
sudo podman exec app-prod php artisan event:cache

echo "--- Restarting Queue Worker ---"
sudo podman exec -d app-prod php artisan queue:work --daemon --sleep=3 --tries=3

echo "--- Production Deployment Successful ---"
