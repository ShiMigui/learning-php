# Start with the official PHP Apache image
FROM php:8.1.31-apache

# Install mysqli and other required extensions
RUN docker-php-ext-install mysqli

# Enable mod_rewrite for Apache (optional)
RUN a2enmod rewrite