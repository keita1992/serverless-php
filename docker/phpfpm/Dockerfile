FROM php:8.2-fpm

RUN apt-get update
RUN apt-get install -y git vim

# CakePHPの必要なPHP拡張モジュールをインストール
RUN apt-get install -y \
  # libfreetype6-dev \
  # libjpeg62-turbo-dev \
  # libpng-dev \
  libxml2-dev \
  libzip-dev \
  libicu-dev \
  libonig-dev \
  # libxslt1-dev \
  # && docker-php-ext-configure gd --with-freetype --with-jpeg \
  # && docker-php-ext-install -j$(nproc) gd \
  && docker-php-ext-install intl \
  && docker-php-ext-install mbstring \
  && docker-php-ext-install pdo \
  && docker-php-ext-install pdo_mysql \
  # && docker-php-ext-install tokenizer \
  # && docker-php-ext-install xml \
  && docker-php-ext-install zip
# && docker-php-ext-install exif \
# && docker-php-ext-install bcmath \
# && docker-php-ext-install xsl \
# && docker-php-ext-install soap 


COPY --from=composer /usr/bin/composer /usr/bin/composer
ENV PATH $PATH:/usr/bin/composer
