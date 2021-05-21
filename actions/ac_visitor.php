<?php
// Visitor Register
include('../includes/include.php');
session_start();
	if ($_POST) {
		$email = $_POST['email'];
		$password = $_POST['password'];
		
			$query = "SELECT * FROM users WHERE email='$email'";
			$query_run = mysqli_query($connect,$query);

			if(mysqli_num_rows($query_run)>0){
				header("Location: ../registervisitor");
				$_SESSION['msg']="Deze email is al in gebruik!";
				exit();
			} else {
				$query = "INSERT INTO users (email, password)VALUES ('$email', '$password')";
				$query_run = mysqli_query($connect,$query);
				header("Location: ../index");
				$_SESSION['success']="U heeft zich geregistreerd!";
				exit();
			} 
	}