#!/bin/sh
set -e

echo "=== Laravel storage permission initialization ==="

# Ensure required Laravel directories exist.
mkdir -p \
    /var/www/html/storage/app \
    /var/www/html/storage/framework/cache \
    /var/www/html/storage/framework/sessions \
    /var/www/html/storage/framework/views \
    /var/www/html/storage/logs \
    /var/www/html/storage/phpstan \
    /var/www/html/bootstrap/cache

# Make www-data the owner.
chown -R www-data:www-data \
    /var/www/html/storage \
    /var/www/html/bootstrap/cache

# Directories
find /var/www/html/storage \
    /var/www/html/bootstrap/cache \
    -type d \
    -exec chmod 2775 {} \;

# Files
find /var/www/html/storage \
    /var/www/html/bootstrap/cache \
    -type f \
    -exec chmod 0664 {} \;

echo "Storage permissions:"
ls -ld /var/www/html/storage
ls -ld /var/www/html/storage/logs

echo "Log directory:"
ls -la /var/www/html/storage/logs

echo "=== Starting application ==="

exec "$@"

