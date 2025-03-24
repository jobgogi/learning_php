#######################################################
# PHP Bootstrap
#   - PHP 프로젝트의 베이스 (라라벨을 사용하지 않는 프로젝트임)
# 작성일 : 2025-03-24
# 작성자 : SeokJoo.Seol <ixymori@gmail.com>
#######################################################
# PHP-FPM 이미지를 기반으로 함
FROM php:8.2-fpm

# 필요한 패키지 설치
RUN apt-get update && apt-get install -y \
  git \
  curl \
  libpng-dev \
  libonig-dev \
  libxml2-dev \
  zip \
  unzip

# PHP 확장 기능 설치
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Composer 설치
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 작업 디렉토리 설정
WORKDIR /var/www/html
