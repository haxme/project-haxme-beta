FROM php:5.6-apache

RUN docker-php-ext-install mysql pdo_mysql

COPY docker/php/haxme.ini /usr/local/etc/php/conf.d/haxme.ini
COPY . /var/www/html/

RUN chown -R www-data:www-data /var/www/html
