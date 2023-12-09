# Use a imagem oficial do PHP com Apache para a versão 8.2
FROM php:8.2-apache

# Instale as extensões do PHP necessárias
RUN docker-php-ext-install pdo pdo_mysql

# Instale o Composer globalmente
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Atualize as informações do pacote e instale as dependências do Apache
RUN apt-get update && \
    apt-get install -y \
    libapache2-mod-php

# Crie e defina o diretório de trabalho
WORKDIR /var/www/html

# Copie os arquivos do projeto para o contêiner
COPY . /var/www/html

# Instale as dependências do Laravel
RUN composer install --optimize-autoloader --no-dev

# Configurar o Apache
RUN a2enmod rewrite
COPY apache-config.conf /etc/apache2/sites-available/000-default.conf

# Exponha a porta 80
EXPOSE 80

# Comando para iniciar o Apache
CMD ["apache2-foreground"]
