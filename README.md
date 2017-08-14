cardmaker
=========

Symfony application for card generation.

installation: 
`sudo apt install php-gd`

running server: 
`php bin/console server:start`

deploy:

`export SYMFONY_ENV=prod`

`composer install --no-dev --optimize-autoloader`

`php bin/console cache:clear --env=prod --no-debug --no-warmup`
 
`php bin/console cache:warmup --env=prod`

`php bin/console assetic:dump --env=prod --no-debug`