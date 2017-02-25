<?php

include __DIR__ . '/models/Post.php';


if(isset($_GET['post'])){
    $Post_one = Post_One($_GET['post']);
}else
    header('Location: /');

include __DIR__ . '/views/post/index.php';
