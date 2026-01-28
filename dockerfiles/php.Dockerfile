FROM php:fpm-alpine3.23

WORKDIR /var/www/laravel

RUN apk add --no-cache \
    mysql-client \
    mariadb-connector-c-dev \
    && docker-php-ext-install pdo_mysql
