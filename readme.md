
[![Build Status](https://travis-ci.org/Symfomany/laravell9.svg?branch=master)](https://travis-ci.org/Symfomany/laravell9)

[![StyleCI](https://styleci.io/repos/61692381/shield)](https://styleci.io/repos/61692381)

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/89235c20-c1db-4c9e-8919-1c127aa5201a/small.png)](https://insight.sensiolabs.com/projects/89235c20-c1db-4c9e-8919-1c127aa5201a)

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/89235c20-c1db-4c9e-8919-1c127aa5201a/big.png)](https://insight.sensiolabs.com/projects/89235c20-c1db-4c9e-8919-1c127aa5201a)

## Pedagogic Project by Laravel 5

Demonstration of Laravel 5 Framework


## BackOffice
Project on handle all contents: Movies - Categories - Cinemas - Acteurs - Réalisateurs



## Skills

+ Learn Documentation
+ Learn MVC
+ Apply Classes and OO


## Installation

+ Since Composer:

```
  composer install
```

+ Configure .env


Screenshots
====

![GitHub Logo](/screens/1.png)
![GitHub Logo](/screens/2.png)



Data Fixtures
====
    php artisan db:seed

## Installing via Composer

* Composer package:   `composer create-project symfomany/laravelcinema`  or just vendor with `composer require symfomany/laravelcinema`
* Manually, Get composer: `curl -sS https://getcomposer.org/installer | php`
* Install the vendor `php compose.phar install`
* Deploy your database in mysql/...sql
* Launch fixtures with php artisan db:seed
* Run the test with Phpunit


### Testing

```
curl -O http://pear.phpunit.de/get/phpunit.phar
mv phpunit.phar /usr/local/bin/
```

### Documentation
+ https://laravel.com/docs/master/installation
+ https://laravel.com/docs/master/structure


### Architecture

+ The app directory, as you might expect, contains the core code of your application. We'll explore this directory in more detail soon.

+ The bootstrap directory contains a few files that bootstrap the framework and configure autoloading, as well as a cache directory that contains a few framework generated files for bootstrap performance optimization.

+ The config directory, as the name implies, contains all of your application's configuration files.

+ The database directory contains your database migration and seeds. If you wish, you may also use this directory to hold an SQLite database.

+ The public directory contains the front controller and your assets (images, JavaScript, CSS, etc.).

+ The resources directory contains your views, raw assets (LESS, SASS, CoffeeScript), and localization files.

+ The storage directory contains compiled Blade templates, file based sessions, file caches, and other files generated by the framework. This directory is segregated into app, framework, and logs directories. The app directory may be used to store any files utilized by your application. The framework directory is used to store framework generated files and caches. Finally, the logs directory contains your application's log files.

+ The tests directory contains your automated tests. An example PHPUnit is provided out of the box.

+ The vendor directory contains your Composer dependencies.


### Handlers Routing

+ Route nommées (updates)
+ Route groupe
+
