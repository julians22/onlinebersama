#!/bin/bash

# Nama image dan container
IMAGE_NAME="laravel-staging"
CONTAINER_NAME="app-staging"

echo "--- Memulai proses deployment staging ---"

# 1. Hapus container lama jika ada
podman rm -f $CONTAINER_NAME || true

# 2. Build image (menggunakan no-cache agar perubahan file terbaca sempurna)
podman build -t $IMAGE_NAME .

# 3. Jalankan container
# Menghubungkan port 8080 host ke 9000 container
podman run -d \
  --name $CONTAINER_NAME \
  -p 8080:9000 \
  --restart always \
  $IMAGE_NAME

echo "--- Menjalankan perintah artisan ---"

# 4. Jalankan perintah optimasi Laravel & Filament
podman exec $CONTAINER_NAME php artisan migrate --force
podman exec $CONTAINER_NAME php artisan config:cache
podman exec $CONTAINER_NAME php artisan route:cache
podman exec $CONTAINER_NAME php artisan view:cache
podman exec $CONTAINER_NAME php artisan filament:assets

echo "--- Deployment Selesai! ---"
