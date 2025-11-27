FROM php:7.4-fpm

# Switch to archived Debian repositories (since buster is EOL)
#RUN sed -i 's|deb.debian.org|archive.debian.org|g' /etc/apt/sources.list \
#    && sed -i '/security.debian.org/d' /etc/apt/sources.list \
#    && echo "Acquire::Check-Valid-Until false;" > /etc/apt/apt.conf.d/99no-check-valid \
#    && apt-get update
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
