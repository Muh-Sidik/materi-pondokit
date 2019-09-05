<?php

spl_autoload_register(function($class) {
    $class = explode('\\', $class);
    $class = end ($class);
    require_once "Data/Sidik/".$class.".php";
});

spl_autoload_register(function($class) {
    $class = explode('\\', $class);
    $class = end ($class);
    require_once "Data/Roihan/" . $class . ".php";
});

Use Data\Roihan\User as Roihan;
Use Data\Sidik\User as Sidik;

new Sidik;
new Roihan;
