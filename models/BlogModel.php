<?php

class BlogModel
{
    const SHOW_BY_DEFAULT = 10;
    private static $table = "blog";

    public static function getMainBlog($count = self::SHOW_BY_DEFAULT)
    {
        $count = intval($count);
        $sql = 'SELECT id, title, small_description, image, date_publication, comments, likes 
                FROM ' . static::$table . ' WHERE status = "1" ORDER BY id DESC LIMIT ?';
        return DB::getQueryLimit($sql, [$count]);
    }
    public static function getOneBlog($number_post)
    {
        $number_post = intval($number_post);
        $sql = "SELECT * FROM " . self::$table . " WHERE id = ?";
        return DB::getQuery($sql, [$number_post]);
    }
    public static function getTotalBlogs()
    {
        $sql = 'SELECT count(id) AS count FROM ' . static::$table . ' WHERE status = "1"';
        return DB::getOneQuery($sql);
    }
}