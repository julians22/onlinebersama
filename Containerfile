# STAGE 1: Build JS
FROM node:20-alpine AS frontend-builder
WORKDIR /app
COPY package*.json ./
RUN npm install
COPY . .
RUN npm run build

# STAGE 2: PHP-FPM
FROM php:8.3-fpm-alpine
RUN apk add --no-cache icu-dev libpng-dev libzip-dev zlib-dev git unzip curl
RUN docker-php-ext-install pdo_mysql intl gd zip
COPY --from=docker.io/library/composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
COPY . .
# Ambil hasil build JS dari stage 1
COPY --from=frontend-builder /app/public/build ./public/build

RUN composer install --no-dev --optimize-autoloader --no-interaction
RUN mkdir -p storage bootstrap/cache && \
    chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache && \
    chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache
    php artisan route:cache
    php artisan config:cache
    php artisan view:cache

EXPOSE 9000
CMD ["php-fpm"]
