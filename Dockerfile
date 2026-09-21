# Stage 1: Asset & Dependency Builder
FROM composer:2.8.5 AS builder
WORKDIR /app
COPY . .
RUN composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist

# Stage 2: Runtime Environment
FROM php:8.4-fpm-alpine3.21

RUN apk add --no-cache libpng-dev libjpeg-turbo-dev freetype-dev libzip-dev zip unzip icu-dev oniguruma-dev postgresql-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo pdo_pgsql opcache gd zip intl bcmath

WORKDIR /var/www/html

COPY --from=builder /app /var/www/html
COPY ./docker/php/opcache.ini /usr/local/etc/php/conf.d/opcache.ini

RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Build-time optimization script execution
RUN chmod +x docker/build-optimize.sh && ./docker/build-optimize.sh

# Runtime entrypoint configuration
COPY docker/docker-entrypoint.sh /usr/local/bin/docker-entrypoint.sh
RUN chmod +x /usr/local/bin/docker-entrypoint.sh

EXPOSE 9000
ENTRYPOINT ["docker-entrypoint.sh"]
CMD ["php-fpm"]
