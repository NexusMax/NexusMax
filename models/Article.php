<?php

class Article
{

    public static function getAllArticle()
    {

        $pdo = new DB;

        $sql = "SELECT * FROM posts";
        return $pdo->DB_Query($sql);
    }

    public static function getOneArticle($number_post)
    {

        $number_post = intval($number_post);
        
        $pdo = new DB;

        $sql = "SELECT * FROM posts WHERE id = " . $number_post;
        return $pdo->DB_Query($sql);
    }

    public function setArticle($opt)
    {

        $pdo = new DB;

        $title = $opt['title'];
        $descr = $opt['descr'];
        $full_desc = $opt['full_desc'];

        $sql = "INSERT INTO posts(title, descr, full_desc) VALUES('$title', '$descr', '$full_desc')";
        $pdo->DB_Insert($sql);
    }
}


