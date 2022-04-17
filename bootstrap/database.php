<?php

require __DIR__ . '/../vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->safeLoad();

$capsule = new Capsule;

$capsule->addConnection([
    "driver" => $_ENV['DB_DRIVER'],
    "host" => $_ENV['DB_HOST'],
    "port" => $_ENV['DB_PORT'],
    "database" => $_ENV['DB_DATABASE'],
    "username" => $_ENV['DB_USERNAME'],
    "password" => $_ENV['DB_PASSWORD'],
    'charset' => $_ENV['DB_CHARSET'],
    'collation' => $_ENV['DB_COLLATION'],
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();