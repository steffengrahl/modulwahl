FROM php:8.0-fpm

RUN apt-get update

RUN apt-get install -y \
    git \
    unzip \
    zip \
    libicu-dev \
    libpq-dev \
    libxml2-dev \
    libzip-dev \
    && docker-php-ext-install intl pdo pdo_mysql zip opcache

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php --version=2.2.9 --install-dir=/usr/bin --filename=composer \
    && rm composer-setup.php

WORKDIR /var/www/html

RUN chown -R www-data:www-data /var/www/html

COPY docker/php/php.ini /usr/local/etc/php/

CMD ["php-fpm"]
