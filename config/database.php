<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();

$capsule->addConnection([
    'driver'    => 'sqlsrv',
    'host'      => '(localdb)\MSSQLLocalDB',
    'database'  => 'PHP7CrudExample',
    'username'  => '',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
    'pooling'   => false,
]);

$capsule->setAsGlobal();

$capsule->bootEloquent();
