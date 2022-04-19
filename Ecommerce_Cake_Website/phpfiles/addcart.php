<?php

session_start();
include('database_connection.php');

$product_name = $_POST['hidden_name'];
$product_price = $_POST['hidden_price'];
$product_quantity = $_POST['quantity'];

if(isset($_POST['add_to_cart'])){
    $query= "INSERT INTO `cart`(`user_id`, `product_name`, `product_quantity`, `product_price`) VALUES ('$_SESSION[id]','$product_name','$product_quantity','$product_price')";
    mysqli_query($connect,$query);
    header("location:shop.php");
}

