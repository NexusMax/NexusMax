<?php

class CartModel
{
    public static function addProduct($id)
    {
        $id = intval($id);
        $productInCart = [];
        if(isset($_SESSION['products'])){
            $productInCart = $_SESSION['products'];
        }

        if(array_key_exists($id, $productInCart)){
            $productInCart[$id]++;
        }else{
            $productInCart[$id] = 1;
        }

        $_SESSION['products'] = $productInCart;
        return self::countItems();
    }
    public static function countItems()
    {
        if(isset($_SESSION['products'])){
            $count = 0;
            foreach ($_SESSION['products'] as $id => $quantity){
                $count += $quantity;
            }
            return $count;
        }else{
            return 0;
        }
    }
    public static function countOneItem($id)
    {
        if(isset($_SESSION['products'][$id]))
            return $_SESSION['products'][$id];
        return 0;

    }

    public static function getProducts()
    {
        if(isset($_SESSION['products'])){
            return $_SESSION['products'];
        }
        return false;
    }

    public static function getTotalPrice($products)
    {
        $productsInCart = self::getProducts();

        if($productsInCart){
            $total = 0;
            foreach ($products as $item){
                $total += $item['price'] * $productsInCart[$item['id']];
            }
        }

        return $total;
    }
    public static function clear()
    {
        if(isset($_SESSION['products']))
            unset($_SESSION['products']);
    }
    public static function save($userName, $userPhone, $userComment, $userId, $products)
    {
        $sql = 'INSERT INTO product_order (user_name, user_phone, user_comment, user_id, products)
                VALUES(?, ?, ?, ?, ?)';
        $products = json_encode($products);
        return DB::setQuery($sql, [$userName, $userPhone, $userComment, $userId, $products]);
    }
    public static function deleteProduct($id)
    {
        // Получаем массив с идентификаторами и количеством товаров в корзине
        $productsInCart = self::getProducts();
        // Удаляем из массива элемент с указанным id
        unset($productsInCart[$id]);
        // Записываем массив товаров с удаленным элементом в сессию
        $_SESSION['products'] = $productsInCart;
    }

}