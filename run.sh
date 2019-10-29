#!/bin/bash
until curl -s -o /dev/null localhost/; do echo "Waiting for Nginx..."; sleep 10; done;
if [ -e /var/www/pimcore/var/config/system.php ]; then
  ./bin/console pimcore:deployment:classes-rebuild
  echo "/var/www/pimcore/var/config/system.php was found...skipping installation"
  exit
fi
  cd /var/www/pimcore
  ./vendor/bin/pimcore-install --no-interaction
  chown -R www-data:www-data /var/www
