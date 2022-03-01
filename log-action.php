<?php
	if (isset($_POST['auth'])) {
		require 'db.php';
		$email = $_POST['email'];
		$password = $_POST['password'];
		$stmt = "SELECT * FROM users WHERE email = ?";
		$prep = $conn->prepare($stmt);
		$prep->execute([$email]);
		$result = $prep->fetch();
		if (!empty($result)) {
			$user_id = $result['user_id'];
			$dbpassword = $result['password'];
			$username = $result['username'];
			if (password_verify($password, $dbpassword)) {
				setcookie('auth', $user_id, time() + 86400 * 30, '/');
				setcookie('mailer', $email, time() + 86400 * 30, '/');
				setcookie('username', $username, time() + 86400 * 30, '/');
				echo "Authorized";
			}
			else{
				echo "Incorrect password";
			}
		}
		else{
			echo "Account doesn't exists";
		}
	}
?>