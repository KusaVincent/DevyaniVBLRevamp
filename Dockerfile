# ============================================================
# Stage 1: Dependency Builder
# ============================================================
FROM php:8.5-cli-alpine3.21 AS builder

WORKDIR /app

RUN apk add --no-cache \
    icu-dev \
    oniguruma-dev \
    libzip-dev \
    zip \
    unzip \
    git \
    postgresql-dev \
    && docker-php-ext-install \
        intl \
        mbstring \
        zip \
        bcmath \
        pdo_pgsql

# Install Composer
COPY --from=composer:2.8.12 /usr/bin/composer /usr/bin/composer

# Copy dependency files first for Docker layer caching
COPY composer.json composer.lock ./

# Verify PHP and required extensions before Composer
RUN php -v \
    && php -m | grep -Ei 'intl|mbstring|pdo|pdo_pgsql|zip|bcmath'

# Copy application
COPY . .

RUN composer install \
    --no-dev \
    --optimize-autoloader \
    --no-interaction \
    --prefer-dist


# ============================================================
# Stage 2: Runtime
# ============================================================
FROM php:8.5-fpm-alpine3.21

RUN apk add --no-cache \
    libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev \
    libzip-dev \
    icu-dev \
    oniguruma-dev \
    postgresql-dev

# ------------------------------------------------------------
# PHP extensions
# ------------------------------------------------------------
RUN docker-php-ext-install pdo_pgsql

RUN docker-php-ext-configure gd \
        --with-freetype \
        --with-jpeg \
    && docker-php-ext-install gd

RUN docker-php-ext-install zip

RUN docker-php-ext-install intl

RUN docker-php-ext-install mbstring

RUN docker-php-ext-install bcmath


# ============================================================
# Application
# ============================================================
WORKDIR /var/www/html

COPY --from=builder /app /var/www/html

COPY ./docker/php/opcache.ini \
    /usr/local/etc/php/conf.d/opcache.ini


# ============================================================
# Laravel directories
# ============================================================
RUN mkdir -p \
        /var/www/html/storage/app \
        /var/www/html/storage/framework/cache \
        /var/www/html/storage/framework/sessions \
        /var/www/html/storage/framework/views \
        /var/www/html/storage/logs \
        /var/www/html/storage/phpstan \
        /var/www/html/bootstrap/cache


# ============================================================
# Ownership and permissions
#
# www-data = PHP-FPM user
# ============================================================
RUN chown -R www-data:www-data \
        /var/www/html/storage \
        /var/www/html/bootstrap/cache


# Directories: rwx for owner/group
# Files: rw for owner/group
RUN find /var/www/html/storage \
        /var/www/html/bootstrap/cache \
        -type d \
        -exec chmod 2775 {} \; \
    && find /var/www/html/storage \
        /var/www/html/bootstrap/cache \
        -type f \
        -exec chmod 0664 {} \;


# ============================================================
# Laravel optimization
# ============================================================
RUN chmod +x docker/build-optimize.sh \
    && ./docker/build-optimize.sh


# ============================================================
# Entrypoint
# ============================================================
COPY docker/docker-entrypoint.sh \
    /usr/local/bin/docker-entrypoint.sh

RUN chmod +x /usr/local/bin/docker-entrypoint.sh


EXPOSE 9000

ENTRYPOINT ["docker-entrypoint.sh"]

CMD ["php-fpm"]
