# Docker compose for PHP, NGINX, MYSQL project

Docker compose configuration that includes php, mysql, and nginx services for your php project. 
All service config files are located in `docker/services` folder
Each service can have multiple Dockerfiles depending on its version.

For example, in docker-compose.yml we have this:
``` yaml 
app:
    build:
        context: ./
        dockerfile: docker/services/php/${PHP_VERSION}/Dockerfile
```
And in our .env file we have this:
```dotenv
#PHP
PHP_VERSION=8.1
```
So if you need php version lower than 8.1, run in command line:
```shell
    mkdir /decker/services/php/${YOUR_VERSION}
    touch /decker/services/php/${YOUR_VERSION}/Dockerfile
```
And then edit your Dockerfile as you need. **Do not forget to change PHP_VERSION in .env file.**


### Current service versions

**PHP** 8.1

**Mysql** latest

**Nginx** latest

## Usage
