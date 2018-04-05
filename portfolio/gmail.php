<?php include 'contact-index.php' ?>


<?php if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];

		// connecting to database
		$host = 'localhost';
		$dbusername = 'root';
		$dbpassword = '';
		$dbname = 'messages';

		$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

		if (mysqli_connect_error()) {
			die('connect error ('.mysqli_connect_errno().')'.mysqli_connect_error());
		}else {
			$sql = "INSERT INTO user (name, mail, subject, message)
			values ('$name','$email','$subject','$message')";
			if ($conn->query($sql)) {
				echo 'New user is inserted successfully';
			}else {
				echo 'Error';
			}
			$conn->close();
		}
			// $id = $result['name'];
			// $id = $result['mail'];

		}
    
