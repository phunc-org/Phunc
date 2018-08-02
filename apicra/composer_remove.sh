#!/bin/bash
rm -rf vendor
php -dmemory_limit=750M composer.phar update --no-scripts --prefer-dist
php artisan --dump-autoload