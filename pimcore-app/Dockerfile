FROM dpfaffenbauer/pimcore:PHP7.2-apache
RUN echo 'memory_limit = 512M' >> /usr/local/etc/php/conf.d/docker-php-memlimit.ini;
RUN cd /var/www/html && \
    COMPOSER_MEMORY_LIMIT=4G composer create-project --no-dev pimcore/skeleton pimcore && \
    mv /var/www/html/pimcore/* /var/www/html && \
    composer require pimcore/data-hub:dev-master w-vision/data-definitions:^3.0 && \
    chown www-data: /var/www/html -R

COPY docker-entrypoint.sh /usr/local/bin/
COPY src/ /var/www/html/src/
RUN chmod +x /usr/local/bin/docker-entrypoint.sh
ENTRYPOINT ["docker-entrypoint.sh"]
CMD ["apache2-foreground"]