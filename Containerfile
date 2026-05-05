FROM php:8.3-fpm-alpine

# Install system dependencies
RUN apk add --no-cache \
    icu-dev \
    libpng-dev \
    libzip-dev \
    zlib-dev

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql intl gd zip

# Set working directory
WORKDIR /var/www/html

# Copy project files
COPY . .

# Perbaikan: Menggunakan user www-data yang standar di PHP-FPM
# Pastikan folder ada sebelum di-chown
RUN mkdir -p storage bootstrap/cache && \
    chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
