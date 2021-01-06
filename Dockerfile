FROM php:7.4-cli
RUN apt-get update && docker-php-ext-install pdo_mysql
COPY . /usr/src/responsi
WORKDIR /usr/src/responsi
CMD [ "php", "./index.php" ]

EXPOSE 8000
