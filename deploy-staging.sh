#!/bin/bash

# Hentikan script jika ada error
set -e

echo "--- Rebuilding Image ---"
sudo podman build -t laravel-staging .

echo "--- Restarting Container ---"
sudo podman rm -f app-staging || true
sleep 2

sudo podman run -d \
  --name app-staging \
  -p 8080:9000 \
  --restart always \
  -v /home/ubuntu/applications/devel/onlinebersama/.env:/var/www/html/.env:Z \
  laravel-staging

echo "--- Running Artisan Commands ---"
sudo podman exec app-staging php artisan migrate --force
sudo podman exec app-staging php artisan key:generate
sudo podman exec app-staging php artisan config:cache
sudo podman exec app-staging php artisan route:cache
sudo podman exec app-staging php artisan view:cache
sudo podman exec app-staging php artisan filament:assets

echo "--- Deployment Successful ---"
