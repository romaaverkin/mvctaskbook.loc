<?php

// Подключаем классы и маршрутизацию
spl_autoload_register(function ($classes) {
    require_once 'core/' . $classes . '.php';
});

$route = new Route;
$route->start();