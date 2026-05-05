# --- STAGE 1: Frontend Build ---
FROM node:20-alpine AS frontend-builder
WORKDIR /app
COPY package*.json ./
RUN npm install
COPY . .
RUN npm run build

# --- STAGE 2: Backend & Final Image ---
FROM php:8.3-fpm-alpine

# Install system dependencies
RUN apk add --no-cache \
    icu-dev libpng-dev libzip-dev zlib-dev git unzip curl

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql intl gd zip

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copy semua file project
COPY . .

# Copy hasil build dari stage frontend tadi ke folder public
COPY --from=frontend-builder /app/public/build ./public/build

# Install dependencies PHP
RUN composer install --no-dev --optimize-autoloader --no-interaction

# Set permissions
RUN mkdir -p storage bootstrap/cache && \
    chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache && \
    chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 9000
CMD ["php-fpm"]
