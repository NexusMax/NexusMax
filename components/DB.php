<?php

class DB
{

    public static function getConnection()
    {
        $db_params = include(ROOT . '/config/db_params.php');

        $host = $db_params['host'];
        $db = $db_params['db'];
        $charset = $db_params['charset'];
        $user = $db_params['user'];
        $pass = $db_params['pass'];

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $opt = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ];

        return new PDO($dsn, $user, $pass, $opt);
    }

    public function DB_Query($sql)
    {
        $pdo = DB::getConnection();

        $result = [];

        $stmt = $pdo->query($sql);
        while ($row = $stmt->fetch()) {
            $result[] = $row;
        }

        return $result;
    }

    public function DB_Insert($sql)
    {
        $pdo = DB::getConnection();
        $pdo->query($sql);
    }
}