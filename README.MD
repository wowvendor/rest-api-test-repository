***This is a sample docker-compose template to start developing from scratch***
==================

The package includes php7.4, mysql8, nginx with sample config and redis.

***Start server***

`docker-compose up -d`

Then just type http://localhost:8001 in your browser

***Rebuild all containers***

`docker-compose up -d --build`

***Rebuild only chosen container(s)***

`docker-compose up -d --build --no-deps nginx`