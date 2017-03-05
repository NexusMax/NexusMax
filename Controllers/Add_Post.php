<?php
include __DIR__ . '/functions/DB.php';
include __DIR__ . '/models/ArticleController.php';

$Post = new Post;
$db = new DB();

if (isset($_POST['submit'])) {

    $Post->Post_Insert($_POST, $db);
    header('Location: /');
}