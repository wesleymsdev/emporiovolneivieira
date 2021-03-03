FROM php:8.0-fpm-alpine

COPY . /src
RUN rm -rf /var/www/html && mv /src /var/www/html &&\
  find /var/www/html/ -type d -exec chmod 755 {} \; &&\
  find /var/www/html/ -type f -exec chmod 644 {} \; &&\
  chmod -R 777 /var/www/html/storage

RUN docker-php-ext-install pdo pdo_mysql

RUN apk --update add --virtual build-dependencies build-base openssl-dev autoconf \
  && apk del build-dependencies build-base openssl-dev autoconf \
  && rm -rf /var/cache/apk/*

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
