# Use official PHP with Apache
FROM php:8.2-apache

# Copy your project into container
COPY . /var/www/html/

# Enable Apache rewrite (optional but recommended)
RUN a2enmod rewrite

# Set permissions
RUN chown -R www-data:www-data /var/www/html
