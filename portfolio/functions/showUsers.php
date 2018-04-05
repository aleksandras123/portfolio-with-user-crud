<?php

include "config.php";


    $pdo = createConnection();

    $query = $pdo->prepare('SELECT * FROM user ORDER BY id DESC'); // SELECT * FROM movies LIMIT 3 OFFSET 0
    $query->execute();

    $results = $query->fetchAll();

    return $results;

 ?>
