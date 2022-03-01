<?php
	function checkExistsUsername($arg)
	{
		require 'db.php';
		$stmt = "SELECT * FROM users WHERE username = ?";
		$prep = $conn->prepare($stmt);
		$prep->execute([$arg]);
		$result = $prep->fetch();
		if (!empty($result)) {
			return true;
		}
	}
	function checkExistsEmail($arg)
	{
		require 'db.php';
		$stmt = "SELECT * FROM users WHERE email = ?";
		$prep = $conn->prepare($stmt);
		$prep->execute([$arg]);
		$result = $prep->fetch();
		if (!empty($result)) {
			return true;
		}
	}
?>