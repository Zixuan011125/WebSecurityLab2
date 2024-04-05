<?php
	if(isset($_POST["register"])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		// Check if username contains special characters
		if(preg_match("/[!@#$%^&*(),.?\":{}|<>]/", $username)){
			echo "The username is invalid. It should not contain special character.";
		}else{
			// Check if password meets complexity requirements
			if(!preg_match("/^(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*()\-_=+{};:,<.>])/", $password)){
				echo "The password is invalid. It should contain at least one uppercase letter, one number and one special character.";
			}else{
				// Password length check
				if(strlen($password) < 8){
					echo "The password is invalid. It should be at least 8 characters long";
				}else{
					echo "The username is $username<br>";
					echo "The password is $password";
				}
			}
		}
	}
?>