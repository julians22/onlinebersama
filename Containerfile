FROM php:8.2-fpm-alpine

# Install system dependencies & PHP extensions
RUN apk add --no-cache icu-dev libpng-dev libzip-dev zlib-dev
RUN docker-php-ext-install pdo_mysql intl gd zip

# Set working directory
WORKDIR /var/www/html

# Copy project files
COPY . .

# Install permissions
RUN chown -R mw-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
