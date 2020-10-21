FROM php:7.4-fpm-alpine AS dev

RUN apk update && \
    apk add --no-cache --virtual git autoconf gcc g++ make && \
    apk add --no-cache zlib-dev libzip-dev php7-curl php7-dom php7-exif php7-fileinfo \
    php7-gd php7-json php7-mbstring php7-mysqli php7-openssl php7-pecl-imagick php7-xml \
    php7-zip php7-session php7-ctype && \
    docker-php-ext-install zip pdo_mysql mysqli && \
    docker-php-ext-enable mysqli

RUN apk add composer

RUN pecl install -o -f redis && \
    rm -rf /tmp/pear && \
    docker-php-ext-enable redis

WORKDIR /opt/app/application

COPY ./.docker/php-fpm/fpm.conf "/usr/local/etc/php-fpm.d/fpm.conf"
COPY ./.docker/php-fpm/php.ini "$PHP_INI_DIR/php.ini"
