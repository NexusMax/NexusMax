<?php

function DB_Connect(){

    $host = 'localhost';
    $db = 'ebanuyTest';
    $charset = 'utf8';

    $user = 'root';
    $pass = '1111';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $opt = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];
    return new PDO($dsn, $user, $pass, $opt);
}

function DB_Query($sql){

    $result = [];
    $pdo = DB_Connect();
    $stmt = $pdo->query($sql);
    while($row = $stmt->fetch()){
        $result[] = $row;
    }

    return $result;
}

function DB_Insert($sql){

    $pdo = DB_Connect();
    $pdo->query($sql);
}