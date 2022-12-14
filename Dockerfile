FROM 639635240310.dkr.ecr.eu-west-1.amazonaws.com/fcz-symfony:latest

COPY ./ /var/www/project/

RUN mkdir -p /var/www/project/var/cache/DEV
RUN chmod -R 777 /var/www/project/var/cache/DEV
RUN mkdir -p /var/www/project/var/log
RUN chmod -R 777 /var/www/project/var/log
RUN mkdir -p /var/www/project/var/session
RUN chmod 777 /var/www/project/var/session

RUN chown -R www-data:www-data /var/www/project/var/

WORKDIR /var/www/
