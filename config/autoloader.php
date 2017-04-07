<?php

spl_autoload_register(function ($class) {

    $array_paths = [
        '/controllers/',
        '/models/',
        '/components/',
    ];

    foreach ($array_paths as $path){
        $path = ROOT . $path . $class . '.php';
        if(file_exists($path)){
            require_once $path;
            break;
        }
    }
});