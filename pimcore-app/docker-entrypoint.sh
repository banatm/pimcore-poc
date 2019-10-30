#!/bin/bash

if [ -e /var/www/html/var/config/system.yml ]; then
  ./bin/console pimcore:deployment:classes-rebuild
  echo "/var/www/html/var/config/system.yml was found...skipping installation"
else
  cd /var/www/html
  ./vendor/bin/pimcore-install --no-interaction
  #install bundles
  ./bin/console pimcore:bundle:enable DataDefinitionsBundle
  ./bin/console pimcore:bundle:install DataDefinitionsBundle
  ./bin/console pimcore:bundle:enable  PimcoreDataHubBundle
  ./bin/console pimcore:bundle:install  PimcoreDataHubBundle
  #install our bundle
  ./bin/console pimcore:bundle:enable ProductsBundle
  ./bin/console pimcore:bundle:install ProductsBundle
  #import definitions
  ./bin/console data-definitions:definition:import:import ./src/ProductsBundle/Resources/import/import-definition-synevo-ro-main-categories.json
  ./bin/console data-definitions:definition:import:import ./src/ProductsBundle/Resources/import/import-definition-synevo-ro-subcategories.json
  ./bin/console data-definitions:definition:import:import ./src/ProductsBundle/Resources/import/import-definition-synevo-ro-products.json
  #load data
  ./bin/console data-definitions:import -d synevo-ro-main-categories
  ./bin/console data-definitions:import -d synevo-ro-subcategories
  ./bin/console data-definitions:import -d synevo-ro-products

  chown -R www-data:www-data /var/www/html
fi

apache2-foreground