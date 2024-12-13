# Start with the official PHP Apache image
FROM php:8.1.31-apache

# Necessary to MYSQLI implementation
RUN docker-php-ext-install mysqli pdo_mysql
RUN a2enmod rewrite