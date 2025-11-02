FROM php:7.2-fpm

# Switch to archived Debian repositories (since buster is EOL)
RUN sed -i 's|deb.debian.org|archive.debian.org|g' /etc/apt/sources.list \
    && sed -i '/security.debian.org/d' /etc/apt/sources.list \
    && echo "Acquire::Check-Valid-Until false;" > /etc/apt/apt.conf.d/99no-check-valid \
    && apt-get update

# Install system dependencies
RUN apt-get install -y \
    git \
    unzip \
    zip \
    libicu-dev \
    libpq-dev \
    libxml2-dev \
    libzip-dev \
    && docker-php-ext-install intl pdo pdo_mysql zip opcache

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy application
COPY . /var/www/html

# Set permissions
RUN chown -R www-data:www-data /var/www/html

COPY docker/php/php.ini /usr/local/etc/php/

CMD ["php-fpm"]
