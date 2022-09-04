#Apartir da Imagem base PHP-FPM irá fazer nossa imagem personalizada
FROM php:8.1-fpm-buster


#RUN - Especifica que o argumento seguinte será executado, ou seja, realiza a execução de um comando;
#Instala a extensao php ausente em laravel
RUN docker-php-ext-install bcmath pdo_mysql

#Copia arquivos ou diretórios locais para dentro de um diretório do container.
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

#Dá update dos ficheiros e instala o zip e o unzip
RUN apt-get update
RUN apt-get install -y git zip unzip

#Diretorio onde iremos trabalhar
WORKDIR /var/www

#Copia todos os ficheiros locais para o workdir definido
COPY . .

#Expõem uma ou mais portas, isso quer dizer que o container quando iniciado poderá ser acessível através dessas portas;
#Expose port 9000 and start php-fpm server
EXPOSE 9000