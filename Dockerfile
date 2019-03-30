FROM romeoz/docker-nginx-php:5.3
RUN locale-gen zh_TW zh_TW.UTF-8
COPY ./html /var/www/app/

COPY ./configs/nginx.conf /etc/nginx/nginx.conf
COPY ./configs/app.conf /etc/nginx/sites-enabled/app.conf
COPY ./configs/www.conf /etc/php5/fpm/pool.d/www.conf

