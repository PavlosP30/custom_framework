<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../bootstrap/database.php';

use app\Http\Router\Router;
use app\Http\Controllers\PropertyController;

//Router::get('/properties-list', function () {
//    (new PropertyController())->propertiesList();
//});

Router::get('/properties', function () {
    (new PropertyController())->index();
});