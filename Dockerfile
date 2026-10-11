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

COPY --from=composer:2.8.12 /usr/bin/composer /usr/bin/composer

# Leverage layer caching for Composer
COPY composer.json composer.lock ./

RUN composer install \
    --no-dev \
    --no-scripts \
    --no-autoloader \
    --prefer-dist \
    --no-interaction

COPY . .

RUN composer dump-autoload --optimize --no-dev


# ============================================================
# Stage 2: Production Runtime
# ============================================================
FROM php:8.5-fpm-alpine3.21

# Install runtime dependencies + build dependencies in a single step
RUN apk add --no-cache \
        icu-libs \
        libpng \
        libjpeg-turbo \
        freetype \
        libzip \
        libpq \
        oniguruma \
        fcgi \
    && apk add --no-cache --virtual .build-deps \
        $PHPIZE_DEPS \
        icu-dev \
        libpng-dev \
        libjpeg-turbo-dev \
        freetype-dev \
        libzip-dev \
        postgresql-dev \
        oniguruma-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) \
        pdo_pgsql \
        gd \
        zip \
        intl \
        mbstring \
        bcmath \
    && apk del .build-deps

# Install the PHP Redis extension via direct source tarball download (bypassing PECL & Git SSL issues)
RUN apk add --no-cache --virtual .redis-build-deps $PHPIZE_DEPS curl \
    && mkdir -p /tmp/phpredis \
    && curl -L https://github.com/phpredis/phpredis/archive/refs/tags/6.3.0RC1.tar.gz | tar xz -C /tmp/phpredis --strip-components=1 \
    && cd /tmp/phpredis \
    && phpize \
    && ./configure \
    && make -j$(nproc) \
    && make install \
    && docker-php-ext-enable redis \
    && rm -rf /tmp/phpredis \
    && apk del .redis-build-deps

# Use standard PHP production settings
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

WORKDIR /var/www/html

# Copy application files with target permissions
COPY --from=builder --chown=www-data:www-data /app /var/www/html
COPY ./docker/php/opcache.ini /usr/local/etc/php/conf.d/opcache.ini

# Create framework directories and apply strict permission model
RUN mkdir -p \
        /var/www/html/storage/app \
        /var/www/html/storage/framework/cache \
        /var/www/html/storage/framework/sessions \
        /var/www/html/storage/framework/views \
        /var/www/html/storage/logs \
        /var/www/html/bootstrap/cache \
    && chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache \
    && find /var/www/html/storage /var/www/html/bootstrap/cache -type d -exec chmod 2775 {} + \
    && find /var/www/html/storage /var/www/html/bootstrap/cache -type f -exec chmod 0664 {} +

# Execute build-time cache optimizations
RUN chmod +x docker/build-optimize.sh \
    && ./docker/build-optimize.sh

COPY ./docker/php/www.conf /usr/local/etc/php-fpm.d/zz-custom.conf
COPY docker/docker-entrypoint.sh /usr/local/bin/docker-entrypoint.sh

RUN chmod +x /var/www/html/docker/entrypoint.sh \
    && chmod +x /usr/local/bin/docker-entrypoint.sh

EXPOSE 9000

# Drop to non-root user
USER www-data

ENTRYPOINT ["docker-entrypoint.sh"]
CMD ["php-fpm"]
