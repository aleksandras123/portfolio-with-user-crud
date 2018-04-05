<?php



$db = "mysql:dbname=messages;host=localhost;charset=utf8";
$user = 'root';
$password = '';

$pdo = new PDO($db, $user, $password);



if (isset($_POST['submit'])) {
        $id = $_POST['user_id'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];

		// connecting to database
		if (mysqli_connect_error()) {
			die('connect error ('.mysqli_connect_errno().')'.mysqli_connect_error());
		}else {
			$query = $pdo->prepare("UPDATE user set name=:name,
            mail=:email, subject=:subject, message=:message where id=:id");

            $query->execute(array(':name'=>$name, ':email'=>$email, ':subject'=>$subject, ':message'=>$message, ':id'=>$id));
            header('location: kontaktai-view.php');
			if ($query) {
				echo 'New user is inserted successfully';
			}else {
				echo 'Error';
			}
		}
			// $id = $result['name'];
			// $id = $result['mail'];

		}

?>
