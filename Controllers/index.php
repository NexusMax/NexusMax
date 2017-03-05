<?php

spl_autoload_register(function ($class) {
    if(file_exists(__DIR__ . '/models/' . $class . '.php'))
        require __DIR__ . '/models/' . $class . '.php';
    if(file_exists(__DIR__ . '/functions/' . $class . '.php'))
        require __DIR__ . '/functions/' . $class . '.php';
});

$Post_all = Post::Post_All();

include __DIR__ . '/views/main/index.php';
