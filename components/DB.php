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

    public static function getQuery($sql, $params = [])
    {
        $pdo = DB::getConnection();
        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);
        $result = [];
        while ($row = $stmt->fetch()) {
            $result[] = $row;
        }

        return $result;
    }
    public static function getOneQuery($sql, $params = [])
    {
        $pdo = DB::getConnection();
        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);
        $row = $stmt->fetch();

        return $row;
    }
    public static function getFetchColumn($sql, $params = [])
    {
        $pdo = DB::getConnection();
        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);

        return $stmt->fetchColumn();
    }
    public static function getQueryLimit($sql, $params = [])
    {
        $pdo = DB::getConnection();
        $stmt = $pdo->prepare($sql);
        for($i = 1; $i <= count($params); $i++)
            $stmt->bindValue($i, $params[$i-1], PDO::PARAM_INT);
        $stmt->execute();

        $result = [];
        while ($row = $stmt->fetch()) {
            $result[] = $row;
        }

        return $result;
    }

    public static function setQuery($sql, $params = [])
    {
        $pdo = DB::getConnection();
        $stmt = $pdo->prepare($sql);
        return $stmt->execute($params) ? $pdo->lastInsertId() : 0;
    }
}