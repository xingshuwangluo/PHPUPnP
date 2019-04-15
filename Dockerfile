FROM daocloud.io/1514582970/pms_docker_php:cli72_swoole_phalcon

WORKDIR /var/www/html

COPY . /var/www/html/

RUN docker-php-ext-install sockets

CMD "php Test.php"
