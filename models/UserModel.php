<?php

class UserModel
{
    public static function register($email, $password)
    {
        $sql = 'INSERT INTO user (email, password) VALUES(?, ?)';
        return DB::setQuery($sql, [$email, $password]);
    }
    public static function checkName($name)
    {
        $name = strip_tags(trim($name));                        // удаяем html и php теги из имени
        $name = str_replace(array("\r","\n"),array(" "," "),$name);
        if(strlen($name) >= 2)
            return true;

        return false;
    }
    public static function checkPassword($password)
    {
        if(strlen($password) >= 6)
            return true;

        return false;
    }
    public static function checkEmail($email)
    {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);         // удаяем левые знаки из емейла
        if(filter_var($email, FILTER_VALIDATE_EMAIL))
            return true;

        return false;
    }
    public static function checkEmailExists($email)
    {
        $sql = "SELECT COUNT(*) FROM user WHERE email = ?";
        if(DB::getFetchColumn($sql, [$email]))
            return true;

        return false;
    }
    public static function checkUserData($email, $password)
    {
        $sql = 'SELECT * FROM user WHERE email = ? AND password = ?';
        $result = DB::getOneQuery($sql, [$email, $password]);

        if($result)
            return $result['id'];
        return false;
    }
    public static function checkValidate($email, $password)
    {
        if (!UserModel::checkEmail($email))
            $errors[] = 'Неправильный email';

        if (!UserModel::checkPassword($password))
            $errors[] = 'Неправильный пароль';
        
        return empty($errors) ? false : $errors;
    }
    public static function checkPhone($phone)
    {
        if (strlen($phone) >= 10) {
            return true;
        }
        return false;
    }
    public static function auth($userId)
    {
        $_SESSION['user'] = $userId;
    }
    public static function checkLogged()
    {
        if(isset($_SESSION['user'])){
            return $_SESSION['user'];
        }

        header('Location: /login');
    }
    public static function logout()
    {
        unset($_SESSION['user']);
        header('Location: /');
    }
    public static function isGuest()
    {
        if(isset($_SESSION['user']))
            return true;
        return false;
    }
    public static function getUserById($userId)
    {
        $sql = 'SELECT * FROM user WHERE id = ?';
        return DB::getOneQuery($sql, [$userId]);
    }
    public static function edit($userId, $name, $email, $password)
    {
        $sql = 'UPDATE user SET name = ?, email = ?, password = ? WHERE id = ?';
        return DB::setQuery($sql, [$name, $email, $password, $userId]);
    }
}