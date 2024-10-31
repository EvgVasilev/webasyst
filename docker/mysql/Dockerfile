FROM mysql:8.3.0
LABEL org.opencontainers.image.title="kudel-lib"
LABEL version="0.1"
LABEL description="mysql"

RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/sh -g www www

USER www