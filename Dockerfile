FROM alpine:edge

ENV TERM dumb

# aponta o repositorio
RUN set -x && \
	# echo "http://dl-cdn.alpinelinux.org/alpine/edge/testing" >> /etc/apk/repositories && \
	apk update && \
	apk upgrade && \

	# instala as dependencias
	apk add --update --no-cache \
	wget \
	nginx \
	supervisor \
	bash \
	curl \
	git \
	vim \
	php7 \
	php7-fpm \
	php7-ctype \
	php7-session \
	php7-dom \
	php7-zlib \
	php7-mbstring \
	php7-mcrypt \
	php7-openssl \
	php7-xml \
	php7-json \
	php7-gd \
	php7-opcache \
	php7-iconv \
	php7-curl \
	php7-phar \
	php7-mysqli \
	php7-pgsql \
	php7-zip \
	# php7-pecl \
	php7-redis \
	php7-fileinfo \
	php7-tokenizer \
	php7-xmlreader \
	php7-simplexml \
	php7-xmlrpc \
	php7-soap \
	php7-intl \
	php7-dom && \
	

	# limpa os caches
	rm -rf /var/cache/apk/* && \

	# instala os pecl
	# pecl install redis && \

	# composer
	curl -sS https://getcomposer.org/installer | php7 -- --install-dir=/usr/bin --filename=composer

# configuracoes nginx
COPY /config/nginx/nginx.conf /etc/nginx/nginx.conf
COPY /config/nginx/default.conf /etc/nginx/conf.d
COPY /config/nginx/mime.types /etc/nginx/mime.types

# configuracoes php
COPY /config/php/php.ini /etc/php7/php.ini
COPY /config/php/php-fpm.conf /etc/php7/php-fpm.conf
COPY /config/php/www.conf /etc/php7/php-fpm.d/www.conf

# inis
# COPY /config/php/ini/10_redis.ini /etc/php7/conf.d/10_redis.ini

# configurações do supervisor
COPY /config/supervisord.conf /etc/supervisord.conf

# setup nginx public dir
RUN mkdir -p /var/www/src/public/
WORKDIR /var/www/src

# Start Supervisord
ADD /config/start.sh /start.sh
RUN chmod 755 /start.sh

# Expose Ports
EXPOSE 443 80

# Start Supervisord
CMD ["/start.sh"]
