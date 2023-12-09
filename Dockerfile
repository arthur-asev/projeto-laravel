#
#--------------------------------------------------------------------------
# Image Setup
#--------------------------------------------------------------------------
#

FROM php:8.2-fpm

# Set Environment Variables
ENV DEBIAN_FRONTEND noninteractive

#
#--------------------------------------------------------------------------
# Software's Installation
#--------------------------------------------------------------------------
#
# Installing tools and PHP extentions using "apt", "docker-php", "pecl",
#

# Install "curl", "libmemcached-dev", "libpq-dev", "libjpeg-dev",
#         "libpng-dev", "libfreetype6-dev", "libssl-dev", "libmcrypt-dev",
RUN set -eux; \
    apt-get update; \
    apt-get upgrade -y; \
    apt-get install -y --no-install-recommends \
            curl \
            libmemcached-dev \
            libz-dev \
            libpq-dev \
            libjpeg-dev \
            libpng-dev \
            libfreetype6-dev \
            libssl-dev \
            libwebp-dev \
            libxpm-dev \
            libmcrypt-dev \
            libonig-dev; \
    rm -rf /var/lib/apt/lists/*

RUN set -eux; \
    # Install the PHP pdo_mysql extention
    docker-php-ext-install pdo_mysql; \
    # Install the PHP pdo_pgsql extention
    docker-php-ext-install pdo_pgsql; \
    # Install the PHP gd library
    docker-php-ext-configure gd \
            --prefix=/usr \
            --with-jpeg \
            --with-webp \
            --with-xpm \
            --with-freetype; \
    docker-php-ext-install gd; \
    php -r 'var_dump(gd_info());'


RUN apt update && apt install -y \
        libaio1 \
	libaio-dev \
        libbz2-dev \
        libcurl4-openssl-dev \
        libffi-dev \
        libldap2-dev \
        libldb-dev \
        libonig-dev \
	libzip-dev \
        libpng-dev \
        libssl-dev \
        unixodbc-dev \
        unzip \
        wget \
        zlib1g-dev \
	git \
	vim \
    && rm -rf /var/lib/apt/lists/*

RUN mkdir /opt/oracle \
	&& wget https://download.oracle.com/otn_software/linux/instantclient/2111000/instantclient-basic-linux.x64-21.11.0.0.0dbru.zip \
	&& wget https://download.oracle.com/otn_software/linux/instantclient/2111000/instantclient-sdk-linux.x64-21.11.0.0.0dbru.zip \
	&& unzip instantclient-basic-linux.x64-21.11.0.0.0dbru.zip -d /opt/oracle \
	&& unzip instantclient-sdk-linux.x64-21.11.0.0.0dbru.zip -d /opt/oracle \
	&& rm -rf *.zip \
	&& mv /opt/oracle/instantclient_21_11 /opt/oracle/instantclient

ENV LD_LIBRARY_PATH /opt/oracle/instantclient/
ENV ORACLE_HOME /opt/oracle/instantclient/

RUN ldconfig

RUN docker-php-source extract \
    && docker-php-ext-install \
        bz2 \
        curl \
        ffi \
        fileinfo \
        gd \
        gettext \
        ldap \
        mbstring \
        exif \
        mysqli \
	zip \
    && docker-php-source delete
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
	&& php composer-setup.php \
	&& php -r "unlink('composer-setup.php');" \
	&& mv composer.phar /usr/local/bin/composer \
	&& echo "instantclient,/opt/oracle/instantclient" | pecl install oci8-3.2.1 \
        && echo "extension=oci8" > /usr/local/etc/php/conf.d/docker-php-ext-oci8.ini
