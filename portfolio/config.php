<?php

    function createConnection(){

    $db = "mysql:dbname=messages;host=localhost;charset=utf8";
    $user = 'root';
    $password = '';

    $pdo = new PDO($db, $user, $password);

    return $pdo;

}


 ?>
