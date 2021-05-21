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
		$_SESSION['adminlogin']="U bent ingelogd als admin!";
		exit();
	} else {
		header("Location: ../adminlogin");
		$_SESSION['onjuist']="Ongeldige Login!";
		exit();
	}	
}