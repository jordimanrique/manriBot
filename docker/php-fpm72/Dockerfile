FROM gitlab.atrapalo.com:5005/service-engineering/registry/fpm:7.2-dev

ENV XDEBUG_ENABLE true
ENV XDEBUG_REMOTE_PORT 9001
ENV XDEBUG_REMOTE_HOST 10.254.254.254

USER root

COPY ./install_composer.sh /

RUN chmod +x /install_composer.sh && mkdir /home/wwwagent && chown wwwagent:wwwagent /home/wwwagent

RUN /install_composer.sh

USER wwwagent

WORKDIR /var/www/transport

