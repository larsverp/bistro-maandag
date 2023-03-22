# Dockerfile
FROM php:8.1-apache

RUN apt-get update && \
    apt-get install -y locales libicu-dev && \
    sed -i -e 's/# nl_NL.UTF-8 UTF-8/nl_NL.UTF-8 UTF-8/' /etc/locale.gen && \
    dpkg-reconfigure --frontend=noninteractive locales && \
    update-locale LANG=nl_NL.UTF-8 && \
    docker-php-ext-install intl

COPY . /var/www/html/
