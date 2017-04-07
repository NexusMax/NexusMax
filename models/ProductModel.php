<?php

class ProductModel
{
    const SHOW_BY_DEFAULT = 10;
    private static $table = "products";

    
    public static function getLatestProducts($page = 1, $count = self::SHOW_BY_DEFAULT)
    {
        $page = intval($page);
        $count = intval($count);
        $offset = ($page - 1) * $count;
        $sql = 'SELECT id, name, price, hot, image, image_2, rating FROM ' . static::$table . ' WHERE status = "1" ORDER BY id DESC LIMIT ? OFFSET ?';
        return DB::getQueryLimit($sql, [$count, $offset]);
    }
    public static function getProductInCategory($count = self::SHOW_BY_DEFAULT)
    {
        $count = intval($count);
        $sql = 'SELECT id, name, price, hot, image, image_2, rating, new_arrival, best_seller, special_offer FROM ' . static::$table . ' WHERE status = "1" ORDER BY id DESC LIMIT ?';
        return DB::getQueryLimit($sql, [$count]);
    }
    public static function getCategoryProducts($idCategory = 1, $page = 1, $count = self::SHOW_BY_DEFAULT)
    {
        $idCategory = intval($idCategory);
        $page = intval($page);
        $offset = ($page - 1) * $count;
        $sql = 'SELECT id, name, price, hot, image, image_2, rating FROM ' . static::$table . ' WHERE status = "1" AND category_id = ? ORDER BY id DESC LIMIT ? OFFSET ?';
        return DB::getQueryLimit($sql, [$idCategory, $count, $offset]);
    }
    public static function getTotalProducts()
    {
        $sql = 'SELECT count(id) AS count FROM ' . static::$table . ' WHERE status = "1"';
        return DB::getOneQuery($sql);
    }
    public static function getProductList()
    {
        $sql = 'SELECT * FROM ' . static::$table;
        return DB::getQuery($sql);
    }
    public static function getTotalProductsInCategory($idCategory)
    {
        $sql = 'SELECT count(id) AS count FROM ' . static::$table . ' WHERE status = "1" AND category_id = ?';
        return DB::getOneQuery($sql, [$idCategory]);
    }
    public static function getOneProduct($number_post)
    {
        $number_post = intval($number_post);
        $sql = "SELECT * FROM " . self::$table . " WHERE id = ?";
        return DB::getQuery($sql, [$number_post]);
    }
    public static function setArticle($opt)
    {

        //$title = $opt['title'];
        //$descr = $opt['descr'];
        //$full_desc = $opt['full_desc'];

        $sql = "INSERT INTO " . self::$table . "(title, descr, full_desc) VALUES('ge', 'gwe', 'gw')";
        return DB::setQuery($sql, $opt);
    }
    public static function getProductsByIds($idsArray)
    {
        $in = str_repeat('?,', count($idsArray) - 1) . '?';
        $sql = "SELECT * FROM " . static::$table . " WHERE status = 1 AND id IN ($in)";
        $array = [];
        if(is_array($idsArray))
           $array = $idsArray;
        else $array[] = $idsArray;
        return DB::getQuery($sql, $array);
    }

    public static function deleteProductById($id)
    {
        $sql = 'DELETE FROM product WHERE id = ?';
        return DB::setQuery($sql, [$id]);
    }
    public static function createProduct($option)
    {
        $sql = "INSERT INTO product (name, description, price, hot, image, image_2, ratint, new_arrival, best_seller, special_offer, category_id, status)
            VALUE(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        return DB::setQuery($sql, $option);
    }
    public static function updateProductById($id, $options)
    {
        $sql = "UPDATE product SET name = ?, price = ?, category_id = ?, description = ?, status = ? WHERE id ?";
        return DB::setQuery($sql, [$options, $id]);
    }
}


