# Usando a imagem base do PHP com Apache
FROM php:8.3-apache

# Instalando extensões PHP necessárias para o PostgreSQL
RUN apt-get update \
    && apt-get install -y libpq-dev git \
    && docker-php-ext-install pdo pdo_pgsql

    
# Copiando o arquivo de configuração do Apache
COPY apache-config.conf /etc/apache2/sites-available/000-default.conf
COPY --chmod=0755 setup_composer.sh ./setup_composer.sh
    
RUN ./setup_composer.sh


# Ativando mod_rewrite do Apache
RUN a2enmod rewrite

# Reiniciando o Apache
RUN service apache2 restart