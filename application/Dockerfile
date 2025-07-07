FROM php:8.4.8-apache

# Install mysqli
RUN docker-php-ext-install mysqli

RUN a2enmod rewrite

COPY ./src /var/www/html/

# Limit permissions for apache
RUN chown -R root:www-data /var/www/html \
  && find /var/www/html -type d -exec chmod 750 {} \; \
  && find /var/www/html -type f -exec chmod 640 {} \;

# Copy custom php.ini
COPY ./php.ini /usr/local/etc/php/php.ini

# Custom Apache configuration
COPY ./apache.conf /etc/apache2/conf-available/security.conf
RUN a2enconf security


WORKDIR /var/www/html

EXPOSE 80