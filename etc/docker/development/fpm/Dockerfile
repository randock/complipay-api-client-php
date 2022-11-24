FROM randock/docker-ubuntu-php:7.3-dev

RUN apt-get update && apt-get -yq install ca-certificates
RUN curl -sL https://deb.nodesource.com/setup_14.x | bash - && apt-get install nodejs -y

RUN composer self-update
RUN composer global remove hirak/prestissimo

COPY etc/docker/development/fpm/supervisord.conf /etc/supervisor/conf.d/supervisord.conf
COPY etc/docker/development/fpm/php-fpm7.3.conf /etc/php/7.3/fpm/php-fpm.conf
COPY etc/docker/development/fpm/xdebug.ini /etc/php/7.3/cli/conf.d/20-xdebug.ini
