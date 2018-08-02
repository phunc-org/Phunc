#!/bin/bash
ls -la
mkdir vendor
chmod 777 vendor
php composer.phar update --no-scripts
php composer.phar dump-autoload
php composer.phar composer install -vvv
/bin/dd if=/dev/zero of=/var/swap.1 bs=1M count=1024