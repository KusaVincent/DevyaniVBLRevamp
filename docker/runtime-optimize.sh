#!/bin/sh
set -e

echo "=== Executing Runtime Optimization on Container Startup ==="
php artisan optimize:clear
php artisan optimize
