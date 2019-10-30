#!/bin/bash

if [ -e /var/www/html/var/config/system.yml ]; then
  ./bin/console pimcore:deployment:classes-rebuild
  echo "/var/www/html/var/config/system.yml was found...skipping installation"
else
  cd /var/www/html
  ./vendor/bin/pimcore-install --no-interaction
  ./bin/console pimcore:bundle:enable DataDefinitionsBundle
  ./bin/console pimcore:bundle:install DataDefinitionsBundle
  ./bin/console pimcore:bundle:enable  PimcoreDataHubBundle
  ./bin/console pimcore:bundle:install  PimcoreDataHubBundle
  ./bin/console pimcore:bundle:enable ProductsBundle
  ./bin/console pimcore:bundle:install ProductsBundle
  chown -R www-data:www-data /var/www/html
fi

apache2-foreground