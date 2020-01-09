FROM composer:1.9.1
WORKDIR /var/www
COPY . .
RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN composer install
CMD ["php", "bin/console", "server:run", "0.0.0.0:8000"]