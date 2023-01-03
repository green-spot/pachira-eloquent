<?php

require_once __DIR__ . "/functions.php";
require_once __DIR__ . "/route.php";

Pachira::run([
  "view" => [
    "directory" => __DIR__ . "/views/"
  ],
  "autoload" => [
    "App\Model" => __DIR__ . "/models/"
  ],
  "eloquent" => [
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'test',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
  ]
]);
