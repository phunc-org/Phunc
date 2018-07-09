#!/bin/bash
ls -la
chmod 777 vendor
php composer.phar update --no-scripts
php composer.phar dump-autoload
php composer.phar composer install -vvv