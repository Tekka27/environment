#Codigo para instalar o pdo_mysql e criar assim uma imagem personalizada

#Imagem base
FROM php:fpm-buster


#RUN - Especifica que o argumento seguinte será executado, ou seja, realiza a execução de um comando;
#Instala extensao php ausente em laravel
RUN docker-php-ext-install bcmath pdo_mysql

# Copia arquivos ou diretórios locais para dentro da imagem.
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

#Expõem uma ou mais portas, isso quer dizer que o container quando iniciado
#poderá ser acessível através dessas portas;
#Puxa a imagem padrao do Composer disponivel na DockerHub
RUN apt-get update
RUN apt-get install -y git zip unzip

WORKDIR /var/www

COPY . .


#Expõem uma ou mais portas, isso quer dizer que o container quando iniciado poderá ser acessível através dessas portas;
#Expose port 9000 and start php-fpm server
EXPOSE 9000
