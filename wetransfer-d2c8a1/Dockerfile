FROM php:7.2-cli
RUN apt-get update
RUN apt-get install -y software-properties-common
RUN apt-get install -y gnupg
#RUN LC_ALL=C.UTF-8 add-apt-repository -y ppa:ondrej/php
#RUN apt-get update
#RUN rm /etc/apt/preferences.d/no-debian-php
#RUN apt-get install -y -f libicu-dev libicu63 icu-devtools libc6
#RUN apt-get -y install libxml2-dev php-soap -f
#RUN apt-get install -y php7.0-soap
#RUN systemctl restart apache2
ENV DEBIAN_FRONTEND noninteractive
ENV COMANDO server:run
RUN apt-get update
RUN DEBIAN_FRONTEND=noninteractive apt-get install -y --no-install-recommends apt-utils
RUN apt-get update && \
    apt-get install -y libxml2-dev
RUN LC_ALL=C.UTF-8 add-apt-repository ppa:ondrej/php
RUN apt-get update
RUN docker-php-ext-install soap
COPY . /usr/src/myapp
WORKDIR /usr/src/myapp
ENV DEBIAN_FRONTEND teletype
CMD [ "php", "./FactelWebCliente/app/console", "server:run"]