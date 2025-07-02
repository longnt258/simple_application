FROM php:8.4.8-apache

# Install mysqli
RUN docker-php-ext-install mysqli

RUN a2enmod rewrite

COPY ./src /var/www/html/

WORKDIR /var/www/html

EXPOSE 80