FROM busybox

RUN mkdir -p /var/www/src/public && \ 
    mkdir -p /var/www/src/moodledata && \
    mkdir -p /docker-entrypoint-initdb.d

COPY sql/moodle.sql /docker-entrypoint-initdb.d
COPY moodle/ /var/www/src/public
COPY moodledata/ /var/www/src/moodledata

RUN  chmod -R a+wr /var/www/src/moodledata

VOLUME ["/var/www/src/public", "/var/www/src/moodledata", "/docker-entrypoint-initdb.d"]
