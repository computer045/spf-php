FROM php:7.4.0-apache
RUN a2enmod rewrite

COPY . /var/www/html

EXPOSE 80