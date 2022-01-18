FROM php:8.1.1-cli-buster

RUN apt update && apt install -y \
   vim \
   zip \
   unzip \
   g++ \
   git

RUN docker-php-ext-install sockets

# Install Composer
RUN curl -sS https://getcomposer.org/installer -o composer-setup.php \
    && php composer-setup.php --install-dir=/usr/local/bin --filename=composer \
    && rm composer-setup.php

ADD ./ /app
WORKDIR /app
