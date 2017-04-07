<?php

class CategoryModel
{
    public static function getCategoriesList()
    {
        $sql = "SELECT id, name FROM categories Where status = '1' ORDER BY sort_order ASC";
        return DB::getQuery($sql);
    }
    public static function getCategoriesListAdmin()
    {
        $sql = "SELECT * FROM categories ORDER BY sort_order ASC";
        return DB::getQuery($sql);
    }
    public static function deleteCategoryById($id)
    {
        $sql = 'DELETE FROM category WHERE id = ?';
        return DB::setQuery($sql, [$id]);
    }
    public static function updateCategoryById($id, $name, $sortOrder, $status)
    {
        $sql = "UPDATE category SET name = ?, sort_order = ?, status = ?, WHERE id = ?";
        return DB::setQuery($sql, [$id, $name, $sortOrder, $status]);
    }
    public static function getCategoryById($id)
    {
        $sql = 'SELECT * FROM category WHERE id = ?';
        return DB::getQuery($sql, $id);
    }
    public static function getStatusText($status)
    {
        switch ($status) {
            case '1':
                return 'Отображается';
                break;
            case '0':
                return 'Скрыта';
                break;
        }
    }
    /**
     * Добавляет новую категорию
     * @param string $name <p>Название</p>
     * @param integer $sortOrder <p>Порядковый номер</p>
     * @param integer $status <p>Статус <i>(включено "1", выключено "0")</i></p>
     * @return boolean <p>Результат добавления записи в таблицу</p>
     */
    public static function createCategory($name, $sortOrder, $status)
    {
        $sql = 'INSERT INTO category (name, sort_order, status) VALUES (?, ?, ?)';
        return DB::setQuery($sql,[$name, $sortOrder, $status]);
    }
}