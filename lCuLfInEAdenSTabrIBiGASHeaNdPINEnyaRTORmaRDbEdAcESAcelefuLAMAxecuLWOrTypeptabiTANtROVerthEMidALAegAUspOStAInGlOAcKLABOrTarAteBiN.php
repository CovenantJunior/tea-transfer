<?php
	//Covenant T. junior
	if (isset($_POST['auth'])) {
		if (isset($_COOKIE['auth'])) {
			$sender_email = $_COOKIE['mailer'];
			$sender_username = $_COOKIE['username'];
			$recipient_email = $_POST['email'];
			if ($recipient_email == $sender_email) {
				echo "You can't transfer to yourself";
				exit();
			}
			$amount = $_POST['gets'];
			$base = $_POST['base'];
			$total = $_POST['total'];
			require 'db.php';
			$stmt = "SELECT * FROM users WHERE email = ?";
			$prep = $conn->prepare($stmt);
			$prep->execute([$recipient_email]);
			$result = $prep->fetch();
			if (!empty($result)) {
				$stmt = "SELECT * FROM users WHERE email = ?";
				$prep = $conn->prepare($stmt);
				$prep->execute([$sender_email]);
				$result1 = $prep->fetch();

				$your_balance = $result['balance'];
				$my_balance = $result1['balance'];

				//Deduct Me
				$stmt = "UPDATE users SET balance = ? WHERE email = ?";
				$prep = $conn->prepare($stmt);
				$prep->execute([$my_balance - $total, $sender_email]);


				//Credit You
				$stmt = "UPDATE users SET balance = ? WHERE email = ?";
				$prep = $conn->prepare($stmt);
				$prep->execute([$your_balance + $total, $recipient_email]);

				//File transaction
				$recipient_username = $result['username'];
				$description = $amount.' ('.$base.')';
				$stmt = "INSERT INTO transactions (sender_email, recipient_email, sender_username, recipient_username, description, status, amount) VALUES (?, ?, ?, ?, ?, ?, ?)";
				$prep = $conn->prepare($stmt);
				$prep->execute([$sender_email, $recipient_email, $sender_username, $recipient_username, $description, 1, $total]);
				echo "Success";
			}
			else{
				echo "This recipient email ID doesn't exist";
			}
		}
		else{
			'Session expired. Please re-login';
		}
	}
?>