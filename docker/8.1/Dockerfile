FROM php:8.1-fpm

# Instalar dependências
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    curl

# Instalar extensões PHP
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Criar o usuário 'sail'
RUN groupadd -g 1000 sail && useradd -u 1000 -g sail -m sail

# Configurar diretório de trabalho
WORKDIR /var/www/html

# Trocar para o usuário 'sail'
USER sail
