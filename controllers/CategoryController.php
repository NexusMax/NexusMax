<?php

class CategoryController
{
    public static function actionIndex($page = 1)
    {
        $categoryList = CategoryModel::getCategoriesList();
        $product = ProductModel::getLatestProducts($page);
        $total = ProductModel::getTotalProducts();

        $pagination = new Pagination($total['count'], $page, ProductModel::SHOW_BY_DEFAULT, 'page-');
        $View = new ViewModel;
        $View->categoryList = $categoryList;
        $View->product = $product;
        $View->pagination = $pagination;
        $View->display('clothing/shop/shop.php');
    }

    public static function actionSingle($idCategory, $page = 1)
    {
        $categoryList = CategoryModel::getCategoriesList();
        $product = ProductModel::getCategoryProducts($idCategory, $page);
        $total = ProductModel::getTotalProductsInCategory($idCategory);

        $pagination = new Pagination($total['count'], $page, ProductModel::SHOW_BY_DEFAULT, 'page-');
        $View = new ViewModel;
        $View->categoryList = $categoryList;
        $View->product = $product;
        $View->idCategory = $idCategory;
        $View->pagination = $pagination;

        $View->display('clothing/shop/shop.php');
    }
}