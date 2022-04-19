<?php

require('database_connection.php');
?>

<div class="col-md-3" style="margin-top:12px;">  
            <div class="image-field" style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px; height:350px;" align="center">
            <form action="" method="POST" >
            	
            	<input type="text" name="name" id="name"  placeholder="name" required />
            	<input type="text" name="price" id="price" placeholder="price" required  />
                <input type="file" name="image" id="image" value=""  placeholder="image" required />

                <button name="submit">Submit</button>
                </form>
            </div>
        </div>

     <?php
if(isset($_POST['submit']))
{
        $query="INSERT INTO `tbl_product`( `name`, `image`, `price`) VALUES ('$_POST[name]','$_POST[image]','$_POST[price]')";

if(mysqli_query($connect,$query)){
    echo " <script>alert('inserted');
    window.location.href='products_update.php';
    </script>";
}else{
    echo " <script>
    alert('Cannot Run Query');

</script>"; }
}

?>