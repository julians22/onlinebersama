#!/bin/bash

# Hentikan script jika ada error
set -e

echo "--- Rebuilding Production Image ---"
# Menggunakan tag image terpisah untuk production
sudo podman build -t laravel-prod .

echo "--- Restarting Container ---"
sudo podman rm -f app-prod || true
sleep 2

# Pastikan folder log ada di host sebelum di-mount
mkdir -p /home/ubuntu/applications/prod/onlinebersama/storage/logs
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
mkdir -p /home/ubuntu/applications/prod/onlinebersama/public/build
sudo podman cp app-prod:/var/www/html/public/build /home/ubuntu/applications/prod/onlinebersama/public/

echo "--- Publishing Filament & Livewire Assets ---"
sudo podman exec app-prod php artisan filament:assets
sudo podman exec app-prod php artisan livewire:publish --assets

# Copy folder vendor ke host setelah dipublish di dalam container
sudo podman cp app-prod:/var/www/html/public/vendor /home/ubuntu/applications/prod/onlinebersama/public/

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
# Menjalankan worker di background
sudo podman exec -d app-prod php artisan queue:work --daemon --sleep=3 --tries=3

echo "--- Production Deployment Successful ---"
