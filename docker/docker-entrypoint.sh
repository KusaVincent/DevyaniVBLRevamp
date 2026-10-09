#!/bin/sh
set -e

# Fast check: create required directories only if they don't exist
# (e.g., when external volumes are mounted at runtime over /var/www/html/storage)
for dir in \
    storage/app \
    storage/framework/cache \
    storage/framework/sessions \
    storage/framework/views \
    storage/logs \
    storage/phpstan \
    bootstrap/cache; do

    if [ ! -d "/var/www/html/$dir" ]; then
        mkdir -p "/var/www/html/$dir"
        chown -R www-data:www-data "/var/www/html/$dir"
        chmod 2775 "/var/www/html/$dir"
    fi
done

echo "=== Starting application ==="

# Execute Laravel runtime initialization/optimization
if [ -x "/var/www/html/docker/entrypoint.sh" ]; then
    /var/www/html/docker/entrypoint.sh
else
    echo "ERROR: /var/www/html/docker/entrypoint.sh not found or not executable"
    exit 1
fi

echo "=== Starting container command: $* ==="

exec "$@"
