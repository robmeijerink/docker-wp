FROM php:8.0-fpm-alpine

RUN touch /var/log/error_log

ADD ./www.conf /usr/local/etc/php-fpm.d/www.conf
ADD ./php.ini /etc/php/8.0/fpm/conf.d/99-overrides.ini

RUN addgroup -g 1000 wp && adduser -G wp -g wp -s /bin/sh -D wp

RUN mkdir -p /var/www/html

RUN chown wp:wp /var/www/html

WORKDIR /var/www/html

RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable pdo_mysql

RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar

RUN chmod +x wp-cli.phar && mv wp-cli.phar /usr/local/bin/wp
