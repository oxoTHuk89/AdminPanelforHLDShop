<?php
error_reporting(E_ALL);
define ("RCON_VALIDATE", True);
//Включаем добавление\уладение серверов
define ("ADMIN", True);
//База данных, подключение
$user = "";
$password = "";
$host = "";
$DataBase = "";

try {
    $dbh = new PDO('mysql:host=' . $host . ';dbname=' . $DataBase, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbh->query("SET NAMES utf8");
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

function StringInputCleaner($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = (filter_var($data, FILTER_SANITIZE_STRING));
    return $data;
}
