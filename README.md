# PHP Openweather API

Query the openweather API with PHP.

## Without Docker

* Clone this repository to your server
* In your browser go to `[yourhost.com]/php-openweather-api/app`

## With Docker

This repository contains a little `docker-compose` configuration to start with `Linux, Nginx, and PHP`.

The following versions are used:

* PHP 8.0 (FPM)
* Nginx 1.21.0

### Configuration

The Nginx configuration can be found in `config/nginx/`.

You can also set the following environment variables, for example in the included `.env` file:

| Key | Description |
|-----|-------------|
|APP_PORT|The app access port.|
|APP_NAME|The name used when creating a container.|

### Usage

* Clone this repository
* `cd` into the directory you just clone
* Start the server with `docker-compose up`.

### Entering the containers

You can use the following command to enter a container:

Where `{CONTAINER_NAME}` is one of:

`docker exec -ti {CONTAINER_NAME} /bin/bash`

* `{APP_NAME}-php`
* `{APP_NAME}-nginx`
