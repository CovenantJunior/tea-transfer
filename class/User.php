<?php
	/**
	 * Grab all data from user provided credentials are met
	 */
	class GlobalUser
	{
		
		public function Data()
		{
			require 'db.php';
			if (isset($_COOKIE['auth'])) {
				$user_id = $_COOKIE['auth'];
				$stmt = "SELECT * FROM users WHERE user_id = ?";
				$prep = $conn->prepare($stmt);
				$prep->execute([$user_id]);
				$result = $prep->fetch();
				if (!empty($result)) {
					return $data = $result;
					$conn = null;
				}
				else{
					//echo "Please login";
					header('location: login');
				}
			}
			else{
				header('location: login');
			}
		}
	}
	//$data = Global(new User)->Data();
	$data = (new GlobalUser)->Data();
	/**
	 * 
	 */
	class User extends GlobalUser
	{
		public function username($data)
		{
			echo $data['username'];
		}
		public function email($data)
		{
			echo $data['email'];
		}
		public function balance($data)
		{
			echo $data['balance'];
		}
	}
	$user = new User();
?>