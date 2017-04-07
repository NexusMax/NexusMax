<?php

class UserController
{
    public function actionMyAccount()
    {
        $userId = UserModel::checkLogged();
        $user = UserModel::getUserById($userId);

        $name = $user['name'];
        $email = $user['email'];

        if(isset($_POST['submit'])) {

            $errors = UserModel::checkValidate($_POST['email'], $_POST['password']);

            if (empty($errors)){
                $result = UserModel::edit($userId, $_POST['name'], $_POST['email'], $_POST['password']);
                header("Location: /my-account/");
            }
        }

        $View = new ViewModel;
        $View->userName = $user['name'] == '' ? $user['email'] : $user['name'];
        $View->errors = empty($errors) ? false : $errors;
        $View->name = $name;
        $View->email = $email;
        $View->display('clothing/user/my-account.php');
    }
    public function actionRegister()
    {
        if(isset($_POST['submit'])){

            $errors = UserModel::checkValidate($_POST['email'], $_POST['password']);

            if(UserModel::checkEmailExists($_POST['email']))
                $errors[] = 'Email уже используется';

            if(empty($errors))
                $result = UserModel::register($_POST['email'], $_POST['password']);
        }

        $View = new ViewModel;
        $View->errors = empty($errors) ? false : $errors;
        $View->result = empty($result) ? false : true;
        $View->display('clothing/user/register.php');
    }
    public function actionLogin()
    {
        if(isset($_POST['submit'])) {

            $errors = UserModel::checkValidate($_POST['email'], $_POST['password']);

            if(empty($errors)) {
                $userId = UserModel::checkUserData($_POST['email'], $_POST['password']);
                if (!$userId)
                    $errors[] = 'Неправильные данные для входа на сайт';
                else {
                    UserModel::auth($userId);
                    header('Location: /my-account/');
                }
            }

        }


        $View = new ViewModel;
        $View->errors = empty($errors) ? false : $errors;
        $View->display('clothing/user/login.php');
    }
    public function actionLogout()
    {
        UserModel::logout();
    }
//    public static function actionEdit()
//    {
//        $userId = UserModel::checkLogged();
//        $user = UserModel::getUserById($userId);
//
//        if(isset($_POST['submit'])){
//
//            $errors = UserModel::checkValidate($_POST['email'], $_POST['password']);
//
//            if(empty($errors))
//                $result = UserModel::edit($userId, $_POST['email'], $_POST['password']);
//        }
//
//        $View = new ViewModel;
//        $View->errors = empty($errors) ? false : $errors;
//        $View->display('clothing/user/login.php');
//    }
}