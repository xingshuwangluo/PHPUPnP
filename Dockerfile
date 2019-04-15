FROM daocloud.io/1514582970/pms_docker_php:apache72_phalcon

WORKDIR /var/www/html

COPY . /var/www/html

RUN docker-php-ext-install sockets

