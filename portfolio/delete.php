<?php
include('config.php');
$pdo = createConnection();
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = $pdo->prepare('DELETE FROM user WHERE id=?');
    $query->execute(array($id));
    header('Location:kontaktai-view.php');
}



 ?>
