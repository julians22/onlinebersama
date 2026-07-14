#!/bin/bash

# Hentikan script jika ada error
set -e

echo "--- Rebuilding Production Image ---"
sudo podman build -t laravel-prod .

echo "--- Restarting Container ---"
sudo podman rm -f app-prod || true
sleep 2

# Pastikan folder log ada di host sebelum di-mount
# Gunakan sudo untuk memastikan folder prod tercipta dengan benar
sudo mkdir -p /home/ubuntu/applications/prod/onlinebersama/storage/logs
sudo chown -R www-data:www-data /home/ubuntu/applications/prod/onlinebersama/storage || true
sudo chmod -R 775 /home/ubuntu/applications/prod/onlinebersama/storage

# Jalankan container di port 8081, mount .env dan storage
sudo podman run -d \
  --name app-prod \
  -p 8081:9000 \
  --restart always \
  -v /home/ubuntu/applications/prod/onlinebersama/.env:/var/www/html/.env:Z \
  -v /home/ubuntu/applications/prod/onlinebersama/storage:/var/www/html/storage:Z \
  laravel-prod

echo "--- Extracting Static Assets to Host ---"
# FIX PERMISSION DENIED: Gunakan sudo untuk membuat folder public/build jika belum ada
sudo mkdir -p /home/ubuntu/applications/prod/onlinebersama/public/build
sudo mkdir -p /home/ubuntu/applications/prod/onlinebersama/public/vendor

# Pastikan user ubuntu/root bisa menulis ke folder public sementara waktu
sudo chown -R ubuntu:ubuntu /home/ubuntu/applications/prod/onlinebersama/public

# Copy folder build dari container ke host
sudo podman cp app-prod:/var/www/html/public/build /home/ubuntu/applications/prod/onlinebersama/public/

echo "--- Publishing Filament & Livewire Assets ---"
sudo podman exec app-prod php artisan filament:assets
sudo podman exec app-prod php artisan livewire:publish --assets

# Copy folder vendor dari container ke host
sudo podman cp app-prod:/var/www/html/public/vendor /home/ubuntu/applications/prod/onlinebersama/public/

# KEMBALIKAN PERMISSION: Beri Nginx (www-data) hak akses membaca folder public
sudo chown -R www-data:www-data /home/ubuntu/applications/prod/onlinebersama/public
sudo chmod -R 755 /home/ubuntu/applications/prod/onlinebersama/public

echo "--- Fixing Storage Permissions for Podman Mount ---"
# Pastikan folder esensial Laravel sudah terbentuk di host
sudo mkdir -p /home/ubuntu/applications/prod/onlinebersama/storage/framework/views
sudo mkdir -p /home/ubuntu/applications/prod/onlinebersama/storage/framework/cache
sudo mkdir -p /home/ubuntu/applications/prod/onlinebersama/storage/framework/sessions
sudo mkdir -p /home/ubuntu/applications/prod/onlinebersama/storage/logs

# Berikan kepemilikan dan permission longgar khusus untuk folder storage di host
sudo chown -R www-data:www-data /home/ubuntu/applications/prod/onlinebersama/storage
sudo chmod -R 775 /home/ubuntu/applications/prod/onlinebersama/storage
sudo chmod -R 777 /home/ubuntu/applications/prod/onlinebersama/storage/framework

echo "--- Optimizing Laravel for Production ---"
sudo podman exec app-prod php artisan migrate --force
sudo podman exec app-prod php artisan config:cache
sudo podman exec app-prod php artisan route:cache
sudo podman exec app-prod php artisan view:cache
sudo podman exec app-prod php artisan event:cache

echo "--- Restarting Queue Worker ---"
sudo podman exec -d app-prod php artisan queue:work --daemon --sleep=3 --tries=3

echo "--- Production Deployment Successful ---"
