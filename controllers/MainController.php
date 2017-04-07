<?php

class MainController
{
    public function actionIndex()
    {
        $product = ProductModel::getProductInCategory();
        $mainBlog = BlogModel::getMainBlog(3);

        $View = new ViewModel;
        $View->mainBlog = $mainBlog;
        $View->product = $product;

        $View->display('clothing/main.php');
    }

    public function actionView($id)
    {
        $View = new ViewModel;
        $View->display('post/index.php');
    }
    public function action404()
    {
        $View = new ViewModel;
        $View->display('clothing/404.php');
    }
}
