<?php
session_start();
if($_SESSION['login']){
require('database_connection.php');
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
  }
  $sid=$_GET['id'];
?>

<div class="col-md-3" style="margin-top:12px;">
            <div class="image-field" style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px; height:350px;" align="center">
           
                <form method="post" action="">
<input type="text" name="id" value="<?php echo $id; ?>" /><br />
<input type="text" name="name" value="<?php echo $name ?>" /><br />
<input type="file" name="file" value="<?php echo $image; ?>"/><br />
 <input type="text" name="text" value="<?php echo $price; ?>"/><br />

<input type= "submit" name = "edit" value="Edit!">
</form>
            </div>
        </div>

     <?php
if(isset($_POST['submit']))
{
        $query="UPDATE `tbl_product` SET `name`='$_POST[name]',`image`='$_POST[image]',`price`='$_POST[price]' WHERE `id`=$sid;

if (mysqli_query($connect,$query) {
                echo "?> <script>alert('Updated Succesfully');
                window.location.href='products_update.php';
                </script> ";
            <?php } else {
              echo " Error updating record: "  . $connect->error;
            }}
      
else{
	header("location:index.php");
}
?>

