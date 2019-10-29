FROM dpfaffenbauer/pimcore:PHP7.3-apache
RUN echo 'memory_limit = 512M' >> /usr/local/etc/php/conf.d/docker-php-memlimit.ini;
RUN cd /var/www && \
    COMPOSER_MEMORY_LIMIT=4G composer create-project --no-dev pimcore/skeleton pimcore && \
    mv /var/www/pimcore/* /var/www/ && \
    chown www-data: /var/www -R

RUN composer require pimcore/data-hub:dev-master w-vision/data-definitions:^3.0

