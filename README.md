## usage

```
$ composer require green-spot/pachira-eloquent
$ cp -r vendor/green-spot/pachira-eloquent/samples/. ./
```

```php
<?php

Pachira::run([
  "view" => [
    "directory" => __DIR__ . "/views/"
  ],
  "eloquent" => [
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'eloquent_test',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
  ]
]);
```
