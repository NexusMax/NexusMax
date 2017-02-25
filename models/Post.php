<?php

include __DIR__ . '/../functions/DB.php';

function Post_All(){

    $sql = "SELECT * FROM posts";
    return DB_Query($sql);
}

function Post_One($number_post){

    $sql = "SELECT * FROM posts WHERE id = " . $number_post;
    return DB_Query($sql);
}

function Post_Insert($opt){

    $title = $opt['title'];
    $descr = $opt['descr'];
    $full_desc = $opt['full_desc'];

    $sql = "INSERT INTO posts(title, descr, full_desc) VALUES('$title', '$descr', '$full_desc')";
    DB_Insert($sql);
}