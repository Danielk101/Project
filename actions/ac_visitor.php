<?php
// Visitor login
include('../includes/include.php');

$query = mysqli_query($connect, "INSERT INTO users (email, password)VALUES ('$email', '$password')");
 
if($query)
{
	header("Location: ../index.php");
}  