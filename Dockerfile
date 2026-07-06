############################################################
# Stage 1 - Composer
############################################################
FROM composer:2 AS vendor

WORKDIR /app

# Copy toàn bộ source
COPY . .

# Cài dependency production
RUN composer install \
    --ignore-platform-reqs \
    --no-dev \
    --prefer-dist \
    --no-interaction \
    --no-progress \
    --optimize-autoloader \
    --no-scripts

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
# Copy Project
############################################################
COPY . .

############################################################
# Copy Vendor
############################################################
COPY --from=vendor /app/vendor ./vendor

############################################################
# Environment
############################################################
RUN cp .env.example .env \
    && php artisan key:generate --force

############################################################
# Optimize Autoload
############################################################
RUN composer dump-autoload \
    --optimize \
    --no-dev

############################################################
# Package Discovery
############################################################
RUN php artisan package:discover --ansi

############################################################
# Storage
############################################################
RUN mkdir -p \
    storage/framework/cache \
    storage/framework/sessions \
    storage/framework/views \
    storage/logs \
    bootstrap/cache

############################################################
# Permissions
############################################################
RUN chown -R www-data:www-data \
    storage \
    bootstrap/cache \
 && chmod -R 775 \
    storage \
    bootstrap/cache

############################################################
# Health Check
############################################################
HEALTHCHECK \
    --interval=30s \
    --timeout=5s \
    --start-period=10s \
    --retries=3 \
CMD php -v || exit 1

############################################################
# Expose
############################################################
EXPOSE 9000

############################################################
# Start
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
