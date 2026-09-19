# ============================================================
# Stage 1: Asset & Dependency Builder
# ============================================================
FROM php:8.5-cli-alpine AS builder

WORKDIR /app

# Install Composer
COPY --from=composer:2.8.5 /usr/bin/composer /usr/bin/composer

# Install dependencies required by Composer packages
RUN apk add --no-cache \
    icu-dev \
    oniguruma-dev \
    libzip-dev \
    postgresql-dev \
    libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev

# PHP extensions needed while running Composer
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install \
        pdo \
        pdo_pgsql \
        mbstring \
        opcache \
        gd \
        zip \
        intl \
        bcmath

# Copy Composer files first for Docker layer caching
COPY composer.json composer.lock ./

RUN composer install \
    --no-dev \
    --optimize-autoloader \
    --no-interaction \
    --prefer-dist

# Copy application source
COPY . .


# ============================================================
# Stage 2: Runtime Environment
# ============================================================
FROM php:8.5-fpm-alpine

RUN apk add --no-cache \
    libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev \
    libzip-dev \
    zip \
    unzip \
    icu-dev \
    oniguruma-dev \
    postgresql-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install \
        pdo \
        pdo_pgsql \
        opcache \
        gd \
        zip \
        intl \
        bcmath

WORKDIR /var/www/html

COPY --from=builder /app /var/www/html

COPY ./docker/php/opcache.ini \
    /usr/local/etc/php/conf.d/opcache.ini

RUN chown -R www-data:www-data \
        /var/www/html/storage \
        /var/www/html/bootstrap/cache \
    && chmod -R 775 \
        /var/www/html/storage \
        /var/www/html/bootstrap/cache

# Build-time optimization
RUN chmod +x docker/build-optimize.sh \
    && ./docker/build-optimize.sh

# Runtime entrypoint
COPY docker/docker-entrypoint.sh \
    /usr/local/bin/docker-entrypoint.sh

RUN chmod +x /usr/local/bin/docker-entrypoint.sh

EXPOSE 9000

ENTRYPOINT ["docker-entrypoint.sh"]

CMD ["php-fpm"]
