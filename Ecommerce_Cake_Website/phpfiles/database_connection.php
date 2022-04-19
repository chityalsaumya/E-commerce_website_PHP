<?php

//database_connection.php

$con = new PDO("mysql:host=localhost;dbname=test", "root", "");
// $connect = mysqli_connect('localhost','root','','test');
if(mysqli_connect_error()){
    echo"<script>alert('Cannot connect to database');</script>";
    exit();
}

$connect=mysqli_connect('localhost','root','','test');
?>