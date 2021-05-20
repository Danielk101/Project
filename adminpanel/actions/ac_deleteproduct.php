<?php
//Delete Product
include('../includes/include.php');
session_start();
	$productid=$_GET['id'];
    $query = ("DELETE FROM product WHERE productid='$productid'");

    $result = mysqli_query($connect, $query);

    if ($result) {
		header("Location: ../index"); 
	} 
	 else
	{
		header("Location: ../index");
	}	
