COPY ./default.conf /etc/nginx/conf.d/default.conf

RUN docker-php-ext-install pdo_mysql

