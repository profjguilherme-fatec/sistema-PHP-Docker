FROM php:8.2-apache

# Instalar a extensão do MySQLi
RUN docker-php-ext-install mysqli

WORKDIR /var/www/html