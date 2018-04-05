<?php

    $pdo = createConnection();
    $query = $pdo->prepare('DELETE FROM movies WHERE id = :id LIMIT 1');
    $query->execute(['id' => $id]);


 ?>
