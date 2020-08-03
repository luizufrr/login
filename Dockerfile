# configuracoes usadas quando for publicar online
#FROM composer as build
#WORKDIR /app
#COPY . /app
#RUN composer install


FROM php:apache

# configuracoes usadas quando for publicar online
#COPY --from=build /app /var/www/html/

# configuracoes usadas quando for compilar para desenvovimento
COPY . /var/www/html
#atualizar lista de codigos fonte
RUN apt update
#instalar nano
RUN apt install -y nano
#instalar composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php --install-dir=/usr/bin --filename=composer
#instalar php-zip (usado pelo composer)
RUN apt install -y unzip
#instalar bibliotecas e pacotes do codigo
#WORKDIR /var/www/html
#RUN composer install
#COPY /var/www/html .
#instalar php mysqli
RUN docker-php-ext-install mysqli pdo_mysql && docker-php-ext-enable mysqli pdo_mysql
RUN apachectl restart

EXPOSE 80
