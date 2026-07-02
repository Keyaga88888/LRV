############################################################
# Stage 1 - Composer
############################################################
FROM composer:2 AS vendor

WORKDIR /app

COPY composer.json composer.lock ./

RUN composer install \
    --ignore-platform-reqs \
    --no-dev \
    --prefer-dist \
    --no-interaction \
    --no-progress \
    --optimize-autoloader

############################################################
# Stage 2 - PHP
############################################################
FROM php:8.4-fpm

############################################################
# Working Directory
############################################################
WORKDIR /var/www

############################################################
# Install Packages
############################################################
RUN apt-get update && apt-get install -y \
    git \
    curl \
    unzip \
    zip \
    supervisor \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libzip-dev \
    libonig-dev \
    libxml2-dev \
    procps \
    && rm -rf /var/lib/apt/lists/*

############################################################
# PHP Extensions
############################################################
RUN docker-php-ext-configure gd \
    --with-freetype \
    --with-jpeg \
 && docker-php-ext-install \
    pdo_mysql \
    bcmath \
    gd \
    zip \
    exif \
    pcntl

############################################################
# Redis
############################################################
RUN pecl install redis \
 && docker-php-ext-enable redis

############################################################
# Opcache
############################################################
RUN docker-php-ext-enable opcache

############################################################
# Composer
############################################################
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

############################################################
# PHP Config
############################################################
COPY docker/php/php.ini /usr/local/etc/php/conf.d/custom.ini

############################################################
# Supervisor
############################################################
COPY docker/supervisor/laravel-worker.conf \
/etc/supervisor/conf.d/laravel-worker.conf

############################################################
# Vendor
############################################################
COPY --from=vendor /app/vendor ./vendor

############################################################
# Project
############################################################
COPY . .

############################################################
# Permissions
############################################################
RUN mkdir -p \
    storage/framework/cache \
    storage/framework/sessions \
    storage/framework/views \
    storage/logs \
 && chown -R www-data:www-data \
    storage \
    bootstrap/cache \
 && chmod -R 775 \
    storage \
    bootstrap/cache

############################################################
# Optimize
############################################################
RUN php artisan package:discover --ansi || true

############################################################
# Healthcheck
############################################################
HEALTHCHECK --interval=30s \
            --timeout=5s \
            --start-period=10s \
            --retries=3 \
CMD php -v || exit 1

############################################################
# Expose
############################################################
EXPOSE 9000

############################################################
# Default Command
############################################################
CMD ["php-fpm"]
# nếu muốn dùng Supervisor  |  laravel-worker.conf
    # CMD ["supervisord","-n"]
    # Supervisor sẽ đọc: /etc/supervisor/conf.d/laravel-worker.conf



#      file : .dockerignore 
# Tại sao lại ignore vendor?
# Vì trong Dockerfile bạn sẽ chạy:
# composer install
# Docker sẽ tự cài lại vendor.
# Không cần copy vendor từ máy của bạn vào image.
# Tại sao ignore .env?
# Không bao giờ đưa:
# DB_PASSWORD
# APP_KEY
# MAIL_PASSWORD
# AWS_SECRET
# vào Docker Image.
# Image có thể được push lên Docker Hub.