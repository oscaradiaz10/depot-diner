<?php
	if ($_POST) {
		$error = array();
		$alert = array();

		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$message = $_POST['message'];

 
		if (empty($name)) {
			$error['name'] = "*Type your name please!";
		}

		if (empty($email)) {
			$error['email'] = "*Add a valid email addres";
		}

		if (empty($phone)) {
			$error['phone'] = "*Add a phone number";
		}

		if (empty($message)) {
			$error['message'] = "* Please add a message";
		}


		// Database codes go here!
		// $link = mysql_connect('localhost', 'root', '12345678', 'logged_in');

		// $sql = "INSERT INTO table_2 (name, email, password, comment) VALUES ('$username', '$email', '$password', '$comment')";

		// $result = mysql_query($link, $sql);

		// if ($result) {
		// 	echo "Data inserted successfully!";
		// } else {
		// 	echo "Connection error " . mysql_erro();
		// }


		// If there's no error, then insert the datas!
		if (!$error) {
			// define('db_username', 'root');
	  //   	define('db_password', '');
	  //   	define('db_name', 'php_form_validation');
	  //   	define('db_host', 'localhost');

			$host = 'localhost';
			$db_user = 'root';
			$db_password = '';
			$db_name = 'php_form_validation';

			$link = mysqli_connect($host, $db_user, $db_password, $db_name);

			$sql = "INSERT INTO table_1 (name, email, password, comment) VALUES ('$username', '$email', '$password', '$comment')";

			mysqli_query($link, $sql);

			header('location: connection.php');

			// echo '<script type="text/javascript">alert("Your datas have been inserted successfully!");</script>';

			// So that after submitting the form, the input fileds of name & email remain blank again!
			// $_POST['name'] = "";
			// $_POST['email'] = "";

		}

	}
?>
