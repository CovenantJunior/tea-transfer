<?php
	if (isset($_POST['auth'])) {
		require 'db.php';
		$username = strtolower($_POST['username']);
		$email = $_POST['email'];
		$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
		$user_id = password_hash($_POST['email'], PASSWORD_DEFAULT);
		include 'function/Log.php';
		if(checkExistsUsername($username) == true):
			echo "Username already exists. Try another";
		elseif(checkExistsEmail($email) == true):
			echo "Email already exists. Mind logging in?";
		else:
			$stmt = "INSERT INTO users (username, user_id, email, password, balance) VALUES (?, ?, ?, ?, ?)";
			$prep = $conn->prepare($stmt);
			$prep->execute([$username, $user_id, $email, $password, 1000]);
				$description = "1000 (USD)";
				$stmt = "INSERT INTO transactions (sender_email, recipient_email, sender_username, recipient_username, description, status, amount) VALUES (?, ?, ?, ?, ?, ?, ?)";
				$prep = $conn->prepare($stmt);
				$prep->execute(['admine@gmail.com', $email, 'Initial Transaction', $username, $description, 1, 1000]);
			setcookie('auth', $user_id, time() + 86400 * 30, '/');
			setcookie('mailer', $email, time() + 86400 * 30, '/');
			setcookie('username', $username, time() + 86400 * 30, '/');
			echo "Done";
		endif;
	}
?>