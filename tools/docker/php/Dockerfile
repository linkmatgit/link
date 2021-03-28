FROM php:7.4.2-fpm

RUN apt-get update && apt-get install -y \
      wget \
      git \
      fish \
      unzip\
      curl \
      libpng-dev \
      libonig-dev \
      libxml2-dev \
      zip \
      unzip

RUN apt-get update && apt-get install -y libzip-dev libicu-dev && docker-php-ext-install pdo zip intl

# Support de Postgre
RUN apt-get update && apt-get install -y libpq-dev && docker-php-ext-install pdo_pgsql

# Support de MySQL (pour la migration)
RUN docker-php-ext-install mysqli pdo_mysql mbstring exif pcntl bcmath gd

# Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin/ --filename=composer


# Pour la récupération des durées
RUN apt-get update && apt-get install -y ffmpeg

ARG USER_ID
ARG GROUP_ID

RUN groupadd -f --gid 1000 user
RUN adduser --disabled-password --gecos '' --uid 1000 --gid 1000 user
USER user

WORKDIR /var/www
