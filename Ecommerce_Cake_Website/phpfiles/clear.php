

<?php
require('connection.php');
require('database_connection.php');
session_start();
// Check connection
if ($connect->connect_error) {
  die("Connection failed: " . $connect->connect_error);
}
$sid=$_GET['id'];
$sql = "SELECT * from cart WHERE id=$sid";
$result = $connect-> query($sql);

if($result){

  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
          
          $sql = "DELETE FROM `cart` WHERE `user_id`= $_SESSION[id]";
          if ($connect->query($sql) === TRUE) {
              echo " <script>alert('Your cart has been successfully cleared');
              window.location.href='cart.php';
              </script>";
          } else {
            echo "Error updating record: " . $connect->error;
          }
      
      }
  }
  }
   

$connect->close();
?>



