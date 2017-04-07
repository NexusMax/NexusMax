<?php

class ShopController
{

    public function actionIndex($page = 1)
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
    public function actionSingle($id)
    {
        $singleProduct = ProductModel::getOneProduct($id);
        $product = ProductModel::getLatestProducts();

        $View = new ViewModel;
        $View->product = $product;
        $View->singleProduct = $singleProduct;

        $View->display('clothing/shop/single-product.php');
    }
   
    public function actionFullGrid()
    {
        $View = new ViewModel;
        $View->display('clothing/shop/shop-full-grid.php');
    }
    public function actionFullList()
    {
        $View = new ViewModel;
        $View->display('clothing/shop/shop-full-list.php');
    }
    public function actionList()
    {
        $View = new ViewModel;
        $View->display('clothing/shop/shop-list.php');
    }
    public function actionListRightSidebar()
    {
        $View = new ViewModel;
        $View->display('clothing/shop/shop-list-right-sidebar.php');
    }
    public function actionRightSidebar()
    {
        $View = new ViewModel;
        $View->display('clothing/shop/shop-right-sidebar.php');
    }


}