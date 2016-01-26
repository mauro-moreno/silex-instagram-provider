# Silex Instagram provider

Silex Instagram provider

Based on Christian Metz Instagram PHP API V2 [instagram-php-api](https://github.com/cosenary/Instagram-PHP-API).

## Installation

** Step 1: Download Service Provider

To install with [composer](http://getcomposer.org) just open a terminal and type:

```bash
$ composer require mauro-moreno/silex-instagram-provider
```

** Step 2: Enable Service Provider

To enable 

```php
<?php
$app = new Silex\Application;
$app['mappers'] = []; // Array of mapping classes
$app->register(new MauroMoreno\SilexInstagram\SilexInstagramServiceProvider);
```