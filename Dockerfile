FROM php:latest
RUN docker-php-ext-install mysqli

WORKDIR /var/www/html
COPY . .
EXPOSE 80
CMD ["php", "-S", "0.0.0.0:80"]
