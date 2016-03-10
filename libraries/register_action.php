<?php
	include('../init/connect.php');
	
	
	if(!empty($_POST)){
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$repassword = $_POST['password_confirm'];
		
		$info = array($username,$email,$password,$repassword);
		
		if(!array_filter($info)){
			echo "You must fill in at least one field!";
		}else{
		
			if($password != $repassword){
				echo " The passwords do not match, try again";
			}else{
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					echo "Invalid email format"; 
				}else{
					// prepare and bind
					$stmt = $conn->prepare("INSERT INTO users (firstname, lastname, email) VALUES (?, ?, ?)");
					$stmt->bind_param("sss", $firstname, $lastname, $email);

					// set parameters and execute
					$firstname = "John";
					$lastname = "Doe";
					$email = "john@example.com";
					$stmt->execute();

					$firstname = "Mary";
					$lastname = "Moe";
					$email = "mary@example.com";
					$stmt->execute();

					$firstname = "Julie";
					$lastname = "Dooley";
					$email = "julie@example.com";
					$stmt->execute();

					echo "New records created successfully";

					$stmt->close();
					$conn->close();
				}
			}
		}
		
	}else{
		echo "I wasn't able to recieve any info.";
	}






?>