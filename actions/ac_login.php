<?php
// Visitor Login
include('../includes/include.php');
	if(isset($_POST['submit'])){
		$email=$_POST['email'];
		$password=$_POST['password'];
	
		$query = mysqli_query($connect, "SELECT * FROM users WHERE email='$email' AND password='$password'");
	
	$rows = mysqli_num_rows($query);
		if($rows == 1){
		$_SESSION['message'] = 'Successfully Logged In!';
		header("Location: ../index.php"); 
	} 
	 else
	{
		$_SESSION['error'] = 'Email or Password Incorrect!';
		header("Location: ../login.php");
	}	
}