#!/bin/sh
set -e

echo "=== Executing Runtime Optimization on Container Startup ==="
php artisan optimize:clear
php artisan optimize

echo "=== Clearing lingering schedule mutex locks on startup ==="
php artisan schedule:clear-cache
