#!/bin/bash

# Instalar dependências do Composer
if [ -f "composer.json" ]; then
    composer install --no-dev --optimize-autoloader
fi

# Criar diretório público, se necessário
mkdir -p public

# Copiar arquivos necessários para o diretório público
cp -r api/* public/

# Garantir que o diretório público não esteja vazio
touch public/.keep
