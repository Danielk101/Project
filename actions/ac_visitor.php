<?php
// Visitor Register
include('../includes/include.php');
session_start();
if ($_POST) {
	$email = $_POST['email'];
	$password = $_POST['password'];
	$query = mysqli_query($connect, "INSERT INTO users (email, password)VALUES ('$email', '$password')");
	if($query)
	{
		header("Location: ../index.php");
	}  
	else {
		header("Location: ../registervisitor.php");
	}
}