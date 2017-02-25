<?php

function Post_All(){

    $sql = "SELECT * FROM posts";
    return DB_Query($sql);
}

function Post_One($number_post){

    $sql = "SELECT * FROM posts WHERE id = " . $number_post;
    return DB_Query($sql);
}