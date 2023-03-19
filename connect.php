<?php

$driver = 'mysql';
$host = 'localhost';
$db_name = 'dinamic-site';
$db_user = 'dinamic-site-user';
$db_pass = 'mysql';
$charset = 'utf8';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try {
    $pdo = new PDO(
        "$driver:host=$host;dbname=$db_name;charset=$charset",
        $db_user, $db_pass, $options
    );
}catch (PDOException $i){
    die("ошибка подключения к базе данних");
}







?>