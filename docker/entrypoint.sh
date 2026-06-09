#!/bin/sh
set -e

# Ensure Laravel storage and bootstrap cache directories have correct permissions
chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
chmod -R 777 /var/www/html/storage /var/www/html/bootstrap/cache

# Run the next command
exec docker-php-entrypoint "$@"
