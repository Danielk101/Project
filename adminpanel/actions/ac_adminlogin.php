<?php
//Admin login
include('../includes/include.php');
session_start();
	if(isset($_POST['submit'])){
		$email=$_POST['email'];
		$password=$_POST['password'];
	
		$query = ("SELECT * FROM admin WHERE  email='$email' AND password='$password'");
	
		$result = mysqli_query($connect, $query);

	if (mysqli_num_rows($result) === 1) {
		$_SESSION['adminloggedin'] = 'yes';
		header("Location: ../index"); 
	} 
	 else
	{
		header("Location: ../adminlogin");
	}	
}