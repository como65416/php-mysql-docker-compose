FROM php:7.3.2-fpm
RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN apt-get update && apt-get install -y libxml2-dev
RUN docker-php-ext-install xml
RUN apt-get install -y libcurl4-gnutls-dev zip
RUN docker-php-ext-install curl
RUN apt-get install -y zlib1g-dev libzip-dev
RUN docker-php-ext-install zip
EXPOSE 9000
