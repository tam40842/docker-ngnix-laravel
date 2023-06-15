FROM wyveo/nginx-php-fpm:php74

MAINTAINER toankhanh

#Install extensions
RUN apt-get update -y \
    && apt-get install -y php7.4-soap \
    && apt-get install -y openssl \
    && apt-get install -y curl


#Install SSL
ARG DOMAIN

ENV DOMAIN $DOMAIN

COPY ./docker/ssl/generate.sh /etc/nginx/ssl/generate-ssl.sh

RUN chmod +x /etc/nginx/ssl/generate-ssl.sh

RUN cd /etc/nginx/ssl && ./generate-ssl.sh