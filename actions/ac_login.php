<?php
// Visitor Login
include('../includes/include.php');
session_start();
	if(isset($_POST['submit'])){
		$email=$_POST['email'];
		$password=$_POST['password'];
	
		$query = mysqli_query($connect, "SELECT * FROM users WHERE email='$email' AND password='$password'");
	
		$result = mysqli_query($connect, $query);
	
	if (mysqli_num_rows($result) == 0){
		$_SESSION['loggedin'] = 'yes';
		header("Location: ../index.php"); 
	} 
	 else
	{
		header("Location: ../login.php");
	}	
}