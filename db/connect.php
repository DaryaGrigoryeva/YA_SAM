<?php
global $pdo;
$driver = 'mysql';
$host = 'localhost';
$db_name = 'cz50100_startup';
$db_user = 'cz50100_startup';
// 'user'@'localhost' пароль - 123
$db_pass = 'EzggT5Nh';
$charset = 'utf8';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];

try{
    $pdo = new PDO(
        "$driver:host =$host;dbname=$db_name;charset=$charset",$db_user,$db_pass,$options
    );
} catch (PDOException $i){
    die ("Ошибка подключения к базе данных");
}

?>