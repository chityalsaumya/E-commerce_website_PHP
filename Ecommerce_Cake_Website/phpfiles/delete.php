<?php
require('connection.php');
require('database_connection.php');
session_start();
// Check connection
if ($connect->connect_error) {
  die("Connection failed: " . $connect->connect_error);
}
$sid=$_GET['id'];
$sql = "SELECT * from tbl_product WHERE id=$sid";
$result = $connect-> query($sql);

if($result){
  
  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
          
          $sql = "DELETE FROM tbl_product WHERE id=$sid";

          if ($connect->query($sql) === TRUE) {
              echo " <script>alert('Deleted Successfully');
              window.location.href='products_update.php';
              </script>";
          } else {
            echo "Error updating record: " . $connect->error;
          }
      
      }
  }
  }
   

$connect->close();
?>



