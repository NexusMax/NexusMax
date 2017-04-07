<?php

class AdminController
{
    public static function checkAdmin()
    {
        $userId = UserModel::checkLogged();

        $user = UserModel::getUserById($userId);

        if($user['role'] == 'admin'){
            return true;
        }
        die('Location: /');
    }
    public function actionIndex()
    {
        self::checkAdmin();

        $View = new ViewModel;
        $View->display('clothing/admin/admin.php');
    }
    public function actionProduct()
    {
        self::checkAdmin();
        $productList = ProductModel::getProductList();
        
        $View = new ViewModel;
        $View->productList = $productList;
        
        $View->display('clothing/admin/product/admin_product.php');
    }
    public function actionCreateProd()
    {
        self::checkAdmin();

        $categoriesList = CategoryModel::getCategoriesListAdmin();

        if(isset($_POST['submit'])) {
            $options['name'] = $_POST['name'];
            $options['price'] = $_POST['price'];
            $options['category_id'] = $_POST['category_id'];
            $options['status'] = $_POST['status'];
            $options['brand'] = $_POST['brand'];
            $options['is_new'] = $_POST['is_new'];


            $errors = false;

            if (!isset($options['name']) || empty($options['name'])) {
                $id = ProductModel::createProduct($options);
                if ($id) {
                    if (is_uploaded_file($_FILES['image']['tmp_name'])) {
                        move_uploaded_file($_FILES['image']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/views/clothing/images');
                    }
                }
                header('Location: /admin/product');
            }
        }
        
        $View = new ViewModel;
        $View->categoriesList = $categoriesList;
        $View->display('clothing/admin/product/admin_create.php');
    }
    public function actionUpdateProd($id)
    {
        self::checkAdmin();
        $categoryList = CategoryModel::getCategoriesListAdmin();
        $product = ProductModel::getProductsByIds($id);
        if(isset($_POST['submit'])){
            $options['name'] = $_POST['name'];
            $options['price'] = $_POST['price'];
            $options['category_id'] = $_POST['category_id'];
            $options['status'] = $_POST['status'];
            $options['brand'] = $_POST['brand'];
            $options['is_new'] = $_POST['is_new'];

            if(ProductModel::updateProductById($id, $options)){
                echo '<pre>';
                print_r($_FILES['image']);
                echo '</pre>';
                if (is_uploaded_file($_FILES['image']['tmp_name'])) {
                    var_dump(move_uploaded_file($_FILES['image']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/views/clothing/images'));
                }
            }
            header('Location: /admin/product');
        }
        $View = new ViewModel;
        $View->options = $options;
        $View->display('clothing/admin/product/admin_update.php');
    }
    public function actionDeleteProd($id)
    {
        self::checkAdmin();
        if(isset($_POST['submit'])){
            ProductModel::deleteProductById($id);
            header('Location: /admin/product');
        }
        $View = new ViewModel;
        $View->id = $id;
        $View->display('clothing/admin/product/admin_delete.php');
    }
    public function actionCategory()
    {
        self::checkAdmin();
        
        $categoriesList = CategoryModel::getCategoriesListAdmin();

        $View = new ViewModel;
        $View->categoriesList = $categoriesList;
        $View->display('clothing/admin/category/admin_category.php');
        
    }
    public function actionCreateCat()
    {
        self::checkAdmin();
        
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $sortOrder = $_POST['sort_order'];
            $status = $_POST['status'];

            $errors = false;
            
            if (!isset($name) || empty($name)) {
                $errors[] = 'Заполните поля';
            }
            if ($errors == false) {
                // Если ошибок нет
                // Добавляем новую категорию
                CategoryModel::createCategory($name, $sortOrder, $status);
                // Перенаправляем пользователя на страницу управлениями категориями
                header("Location: /admin/category");
            }
        }
        $View = new ViewModel;
        $View->errors = $errors;
        $View->display('clothing/admin/category/admin_create_cat.php');
    }
    public function actionUpdateCat($id)
    {
        self::checkAdmin();
        // Получаем данные о конкретной категории
        $category = CategoryModel::getCategoryById($id);
        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $name = $_POST['name'];
            $sortOrder = $_POST['sort_order'];
            $status = $_POST['status'];
            // Сохраняем изменения
            CategoryModel::updateCategoryById($id, $name, $sortOrder, $status);
            // Перенаправляем пользователя на страницу управлениями категориями
            header("Location: /admin/category");
        }
        $View = new ViewModel;
        $View->category = $category;
        $View->display('clothing/admin/category/admin_update_cat.php');
    }
    public function actionDeleteCat($id)
    {
        // Проверка доступа
        self::checkAdmin();
        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Удаляем категорию
            CategoryModel::deleteCategoryById($id);
            // Перенаправляем пользователя на страницу управлениями товарами
            header("Location: /admin/category");
        }
        // Подключаем вид
        $View = new ViewModel;
        $View->id = $id;
        $View->display('clothing/admin/category/admin_delete_cat.php');
    }
    public function actionOrder()
    {
        self::checkAdmin();
        // Получаем список заказов
        $ordersList = OrderModel::getOrdersList();
        $View = new ViewModel;
        $View->ordersList = $ordersList;
        $View->display('clothing/admin/order/admin_order.php');
    }
    public function actionUpdateOr($id)
    {
        // Проверка доступа
        self::checkAdmin();
        // Получаем данные о конкретном заказе
        $order = OrderModel::getOrderById($id);
        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $userName = $_POST['userName'];
            $userPhone = $_POST['userPhone'];
            $userComment = $_POST['userComment'];
            $date = $_POST['date'];
            $status = $_POST['status'];
            // Сохраняем изменения
            OrderModel::updateOrderById($id, $userName, $userPhone, $userComment, $date, $status);
            // Перенаправляем пользователя на страницу управлениями заказами
            header("Location: /admin/order/view/$id");
        }
        // Подключаем вид
        $View = new ViewModel;

        $View->display('clothing/admin/order/admin_update_or.php');
    }
    public function actionViewOr($id)
    {
        // Проверка доступа
        self::checkAdmin();
        // Получаем данные о конкретном заказе
        $order = OrderModel::getOrderById($id);
        // Получаем массив с идентификаторами и количеством товаров
        $productsQuantity = json_decode($order['products'], true);
        // Получаем массив с индентификаторами товаров
        $productsIds = array_keys($productsQuantity);
        // Получаем список товаров в заказе
        $products = ProductModel::getProductsByIds($productsIds);
        
        // Подключаем вид
        $View = new ViewModel;
        $View->order = $order;
        $View->products = $products;
        $View->productsQuantity = $productsQuantity;
        $View->display('clothing/admin/order/admin_view_or.php');
    }
    public function actionDeleteOr($id)
    {
        // Проверка доступа
        self::checkAdmin();
        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Удаляем заказ
            OrderModel::deleteOrderById($id);
            // Перенаправляем пользователя на страницу управлениями товарами
            header("Location: /admin/order");
        }
        // Подключаем вид
        $View = new ViewModel;
        $View->id = $id;
        $View->display('clothing/admin/order/admin_delete_or.php');
    }
}