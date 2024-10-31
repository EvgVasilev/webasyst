FROM php:8.3.11-fpm

ENV LANG=C.UTF-8
ENV TERM=xterm-256color

#COPY ./config/php/opcache.ini /usr/local/etc/php/conf.d/opcache.ini

# Установить tzdata и другие необходимые пакеты
RUN apt-get update && apt-get install -y \
    tzdata \
    && rm -rf /var/lib/apt/lists/*

# Установите переменную окружения TZ
ENV TZ=Europe/Moscow

# Настройте часовой пояс
RUN ln -fs /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

##RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"
#RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"

# Обновление системы
RUN apt-get update && apt-get upgrade -y \
    && apt-get install apt-utils -y

# Устанавливаем необходимые пакеты
RUN apt-get update && apt-get install -y \
    build-essential \
    libwebp-dev libjpeg62-turbo-dev libpng-dev libxpm-dev libzip-dev libpq-dev libgmp-dev libffi-dev libssl-dev \
    libfreetype6 libfreetype6-dev \
    locales \
    jpegoptim optipng pngquant gifsicle \
    nano \
    zip unzip \
    git \
    curl \
    mdbtools \
    mdbtools-dev \
    unixodbc \
    unixodbc-dev

#RUN docker-php-ext-install opcache
#RUN docker-php-ext-enable opcache

#COPY ./odbc.ini /etc/odbc.ini
#COPY ./odbcinst.ini /etc/odbcinst.ini

# Подключение redis
#RUN pecl install redis \
#    && docker-php-ext-enable redis

# Расширения для работы с базой данных + gd конфигурация для работы captha
RUN docker-php-ext-install pdo pdo_mysql mysqli
RUN docker-php-ext-install gd \
      && docker-php-ext-configure gd --with-freetype --with-jpeg \
	  && docker-php-ext-install -j$(nproc) gd

RUN apt-get update && \
     apt-get install -y \
         libzip-dev \
         && docker-php-ext-install zip

#RUN docker-php-ext-configure pdo_odbc --with-pdo-odbc=unixODBC,/usr \
#      && docker-php-ext-install pdo_odbc

# Установка composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Чистим файлы
RUN docker-php-source delete
RUN apt-get autoremove --purge -y && apt-get autoclean -y && apt-get clean -y

# Настройка пользователя для работы контейнера и взаимодействия прав
RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

# Домашний каталог контейнера
WORKDIR /var/www/html

USER www
