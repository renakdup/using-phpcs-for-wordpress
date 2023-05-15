# Using PHPCS linter in WordPress with WPCS standard
Example of using PHPCS for WordPress projects.

Articles with detailer descriptions how to use PHPCS and WPCS in your project you find by links:
- https://wp-yoda.com/en/wordpress/using-phpcs-linter-in-wordpress-with-wpcs-standard/ [En]
- https://wp-yoda.com/wordpress/ispolzovanie-phpcs-lintera-v-wordpress/ [Ru]


## About project
You can get to know with configured WPCS rules for PHPCS linter, and how to use it with WordPress project.  
Also, you can get to know how to use PHPCS with Github actions.

## Installation
- Install Composer locally or you can use docker container and run commands inside a container   
`docker run --rm -it -v "$PWD":/usr/src/myapp -w /usr/src/myapp pimlab/composer:2.0.0-alpha3-php7.4 sh`  
**NOTE**: if you use php 8 you need to use wp-coding-standards/wpcs:"dev-develop" package, because WPCS sniff doesn't support php 8 yet.

- Then you can run composer commands inside a container.
