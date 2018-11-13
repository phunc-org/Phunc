#!/bin/sh -ex
clear
echo installing...

sed -ie "s/git@/$LOGIN_USER/g" composer.json
composer --version

# echo turn off
exec 1>/dev/null
composer install 2>&1 >/dev/null