FROM php:8.2-fpm

# Instalar dependências do sistema
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    curl \
    libpq-dev # 🔥 Dependência para PostgreSQL

# Instalar extensões PHP
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo_mysql pdo_pgsql mbstring exif pcntl bcmath gd zip

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Criar o usuário 'sail'
RUN groupadd -g 1000 sail && useradd -u 1000 -g sail -m sail

# Definir diretório de trabalho
WORKDIR /var/www/html

# Ajustar permissões para Laravel
RUN mkdir -p storage bootstrap/cache \
    && chown -R sail:sail storage bootstrap/cache

# Trocar para o usuário 'sail'
USER sail
