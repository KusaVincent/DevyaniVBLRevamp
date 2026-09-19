#!/bin/sh
set -e

# Trigger runtime script on spawn
if [ -f "docker/runtime-optimize.sh" ]; then
    chmod +x docker/runtime-optimize.sh
    ./docker/runtime-optimize.sh
fi

exec "$@"
