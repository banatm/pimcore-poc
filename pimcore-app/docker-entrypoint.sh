#!/bin/bash
if [ -e /var/www/html/var/config/system.php ]; then
  ./bin/console pimcore:deployment:classes-rebuild
  echo "/var/www/var/config/system.php was found...skipping installation"
else
  cd /var/www/html
#  composer require pimcore/data-hub:dev-master w-vision/data-definitions:^3.0
  ./vendor/bin/pimcore-install --no-interaction
  ./bin/console pimcore:bundle:enable DataDefinitionsBundle
  ./bin/console pimcore:bundle:install DataDefinitionsBundle
  ./bin/console pimcore:bundle:enable  PimcoreDataHubBundle
  ./bin/console pimcore:bundle:install  PimcoreDataHubBundle
  chown -R www-data:www-data /var/www/html
fi

apache2-foreground