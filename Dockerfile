# Use uma imagem base oficial do PHP com Apache
FROM php:8.0-apache

# Instala a extensão mysqli
RUN docker-php-ext-install mysqli

RUN echo 'session.save_handler = files' >> /usr/local/etc/php/conf.d/docker-php-ext-sessions.ini
RUN echo 'session.save_path = "/tmp"' >> /usr/local/etc/php/conf.d/docker-php-ext-sessions.ini
RUN echo 'session.use_cookies = 1' >> /usr/local/etc/php/conf.d/docker-php-ext-sessions.ini

# Copia os arquivos da aplicação para o diretório público do Apache
COPY src/ /var/www/html/
