# Definição da imagem base para executar a aplicação
FROM php:8.3-apache

RUN apt-get -y update && \
    apt-get install -y \
    libssl-dev \
    libzip-dev \
    unzip \
    git \
    curl \
    apache2 \
    software-properties-common \
    libmemcached-dev \
    libcurl4-openssl-dev \
    pkg-config \
    ca-certificates \
    supervisor


RUN apt-get install -y npm

RUN apk add --no-cache \
    zip \
    freetype \
    libjpeg-turbo \
    libpng \
    freetype-dev \
    libjpeg-turbo-dev \
    libpng-dev \
    nodejs \
    && docker-php-ext-configure zip \
    && docker-php-ext-install zip pdo pdo_mysql \
    && docker-php-ext-configure gd --with-freetype=/usr/include/ --with-jpeg=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-enable gd

# Configurações do apache2
RUN a2enmod ssl rewrite headers proxy* && rm /etc/apache2/sites-enabled/000*

RUN mkdir -p /etc/php/8.2/mods-available/

COPY webserver/app-apache.conf /etc/apache2/sites-enabled
COPY webserver/apache2.conf /etc/apache2/
COPY webserver/ports.conf /etc/apache2/
COPY webserver/php.ini /etc/php/8.2/apache2/
COPY webserver/xdebug.ini /etc/php/8.2/mods-available/

# Instalação dos módulos e extensões do PHP
RUN apt-get update && apt-get install gpg && echo -n 'deb http://ppa.launchpad.net/ondrej/php/ubuntu groovy main' > /etc/apt/sources.list.d/ondrej-ubuntu-php-groovy.list && \
    apt-key adv --keyserver hkp://keyserver.ubuntu.com:80 --recv 14AA40EC0831756756D7F66C4F4EA0AAE5267A6C

RUN apt-get update && \
    pecl channel-update pecl.php.net && \
    pecl install zlib zip redis curl memcached-3.2.0 mysqli && \
    docker-php-ext-install curl mysqli pdo pdo_mysql && \
    docker-php-ext-enable zip redis curl memcached pdo_mysql

RUN pecl install xdebug

RUN update-ca-certificates


# Instalação do composer e suas dependências
WORKDIR /var/www/app

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer && \
    composer clear-cache

COPY . /var/www/app

#RUN composer install --no-dev --prefer-dist
RUN composer install \
    && npm install \
    && npm run build

# Execução dos serviços e "levantar" a aplicação
RUN chmod +x /var/www/app/webserver/entrypoint.sh
RUN rm -r webserver/*.conf && rm -r webserver/*.ini

RUN php artisan key:generate

EXPOSE 80
EXPOSE 5173

ENTRYPOINT ["/var/www/app/webserver/entrypoint.sh"]
CMD ["supervisord", "-c", "/var/www/app/supervisord.conf"]