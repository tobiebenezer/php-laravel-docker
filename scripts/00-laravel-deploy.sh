#!/usr/bin/env bash
echo "Running composer"
composer global require hirak/prestissimo
composer install --no-dev --working-dir=/var/www/html

echo "Installing npm dependency"
npm install

echo "Caching config..."
php artisan optimize:clear

echo "Running migrations..."
php artisan migrate --force

echo "restarting nginx serve"
service php8.2-fpm restart
