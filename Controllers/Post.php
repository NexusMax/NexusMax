<?php

spl_autoload_register(function ($class) {
    if(file_exists(__DIR__ . '/models/' . $class . '.php'))
        require __DIR__ . '/models/' . $class . '.php';
    if(file_exists(__DIR__ . '/functions/' . $class . '.php'))
        require __DIR__ . '/functions/' . $class . '.php';
});

if(isset($_GET['post'])){
    $Post_one = Post::Post_One($_GET['post']);
}else
    header('Location: /');

include __DIR__ . '/views/post/index.php';
