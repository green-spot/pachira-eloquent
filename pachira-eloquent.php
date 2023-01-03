<?php

use Illuminate\Database\Capsule\Manager as Capsule;

Pachira::addPlugin("eloquent", function ($options) {
  $capsule = new Capsule;

  $capsule->addConnection($options);
  $capsule->setAsGlobal();
  $capsule->bootEloquent();
});
