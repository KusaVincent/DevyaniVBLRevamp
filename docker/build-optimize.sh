#!/bin/sh
set -e

echo "=== Running Build-Time Optimization ==="
php artisan optimize:clear || true
php artisan event:cache || true
