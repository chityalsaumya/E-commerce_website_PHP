<?php
session_start();
if($_SESSION['username']){
require('database_connection.php');
?>

<div class="col-md-3" style="margin-top:12px;">  
            <div class="image-field" style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px; height:350px;" align="center">
            <form action="" method="POST" >
            <?php  
require('database_connection.php');
$total_first = 0;
$total_price = 0;
$total_item = 0; 
$sql = "SELECT * from cart WHERE `user_id` = $_SESSION[id]";
									$result = $connect-> query($sql);
									if($result-> num_rows > 0){
									while($row = $result->fetch_assoc()){
										$total_first = $total_first + ($row["product_quantity"] * $row["product_price"]);
										$total_item = $total_item + 1;
									
									}
								}
									echo " <br><br><br><br><br><br><br><br>Total Amount : " .number_format($total_first, 2);
}
else{
	header("location:index.php");
}
             ?>
             <br>
             <br>
            <button name="submit">Pay Amount</button>
                </form>
            </div>
        </div>

        <?php
if(isset($_POST['submit']))
{
    $query = "DELETE FROM `cart` WHERE `user_id`= $_SESSION[id]";

if(mysqli_query($connect,$query)){
    echo " <script>alert('Order placed');
    window.location.href='shop.php';
    </script>";
}else{
    echo " <script>
    alert('Cannot Run Query');

</script>"; }
}

      
?>