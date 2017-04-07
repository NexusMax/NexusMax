<?php

class CartController
{

    public function actionAdd($id)
    {
        CartModel::addProduct($id);
        $referrer = $_SERVER['HTTP_REFERER'];
        header("Location: $referrer");
    }

    public function actionAddajax($id)
    {
        echo CartModel::addProduct($id);
        return true;
    }

    public function actionInc($id)
    {
        CartModel::addProduct($id);
        echo CartModel::countOneItem($id);
        return true;
    } 
    public function actionIndex()
    {
        $productInCart = CartModel::getProducts();

        if($productInCart){
            $productsIds = array_keys($productInCart);
            $products = ProductModel::getProductsByIds($productsIds);

            $totalPrice = CartModel::getTotalPrice($products);
        }
        

        $View = new ViewModel;
        $View->productInCart = $productInCart;
        $View->products = empty($products) ? 0 : $products;
        $View->totalPrice = empty($totalPrice) ? 0 : $totalPrice;
        $View->display('clothing/cart/cart.php');
    }
    public function actionCompleteOrder()
    {
        $View = new ViewModel;
        $View->display('clothing/cart/complete-order.php');
    }
    public function actionCheckout()
    {
        $result = false;

        if(isset($_POST['submit'])){
            $userName = $_POST['userName'];
            $userPhone = $_POST['userPhone'];
            $userComment = $_POST['userComment'];

            $errors = false;

            if(!UserModel::checkName($userName))
                $errors[] = 'name';
            if(!UserModel::checkPhone($userPhone))
                $errors[] = 'phone';

            if($errors == false){
                $productsInCart = CartModel::getProducts();
                if(UserModel::isGuest())
                    $userId = false;
                else
                    $userId = UserModel::checkLogged();

                $result = CartModel::save($userName, $userPhone, $userComment, $userId, $productsInCart);
                if($result){
                    $adminEmail = '';
                    $message = '';
                    $subject = '';
                    mail($adminEmail, $subject, $message);

                    CartModel::clear();
                }
            }else{
                $productsInCart = CartModel::getProducts();

                if($productsInCart == false)
                    header("Location: /");
                else{
                    $productsIds = array_keys($productsInCart);
                    $products = ProductModel::getProductsByIds($productsIds);
                    $totalPrice = CartModel::getTotalPrice($products);
                    $totalQuantity = CartModel::countItems();

                    $userName = false;
                    $userPhone = false;
                    $userComment = false;

                    if(UserModel::isGuest()){

                    }else{
                        $userId = UserModel::checkLogged();
                        $user = UserModel::getUserById($userId);
                        $userName = $user['name'];
                    }
                }

            }
        }

        $View = new ViewModel;
        $View->display('clothing/cart/checkout.php');
    }
    public function actionDelete($id)
    {
        CartModel::deleteProduct($id);
        header('Location: /cart');
    }
    public function actionWishlist()
    {
        $View = new ViewModel;
        $View->display('clothing/cart/wishlist.php');
    }
    public function actionCompare()
    {
        $View = new ViewModel;
        $View->display('clothing/cart/compare.php');
    }
}