# Using PHPCS with WordPress
Example of using PHPCS with WordPress

## Installation
- Install Composer locally or you can use docker container and run commands inside a container   
`docker run --rm -it -v "$PWD":/usr/src/myapp -w /usr/src/myapp pimlab/composer:2.0.0-alpha3-php7.4 sh`  
**NOTE**: if you use php 8 you need to use wp-coding-standards/wpcs:"dev-develop" package, because WPCS sniff doesn't support php 8 yet.

- Then you can run composer commands inside a container.