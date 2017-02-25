<?php

include __DIR__ . '/models/Post.php';

if(isset($_POST['submit'])){

    Post_Insert($_POST);
    header('Location: /');
}