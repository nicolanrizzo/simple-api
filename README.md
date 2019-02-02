# simple-api

A very simple API ({"ping": "pong"}) for testing Symfony 4 with Docker installation process.

Based on https://github.com/eko/docker-symfony.

Read https://medium.com/@nicola.rizzo/creating-the-simplest-possible-api-with-symfony-4-and-docker-3b5bf205b3b7.

## If you clone this repo

If you clone this repository without following the tutorial, you have to use the following commands:

```
docker-compose up -d
docker-compose run php composer install
```

and add `127.0.0.1 symfony.localhost` to your hosts file. (see https://github.com/nicolanrizzo/simple-api/issues/1)
