#!/bin/sh
set -eu

echo "=== Running Build-Time Optimization ==="

php artisan event:cache
