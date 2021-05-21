<?php
//Admin login
include('../includes/include.php');
session_start();
    if ($_POST) {
            $name = $_POST['name'];
            $description = $_POST['description'];
            $image = $_POST['image'];
            $price = $_POST['price'];
        $query = "INSERT INTO product (name, description, image, price)VALUES ('$name', '$description', '$image', '$price')";

        $result = mysqli_query($connect, $query);

        if ($result) {
            header("Location: ../index");
            $_SESSION['toegevoegd']="Product toegevoegd!";
            exit();
        } else {
            header("Location: ../index");
        }
    }	