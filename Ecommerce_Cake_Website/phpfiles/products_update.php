<?php

session_start();
include('database_connection.php');

?>

<html>
<body>
<a href='logout.php'> LOGOUT</a>
<a href='dashboard.php'> See Users </a>
<table>
<tr>
<th>Id</th>
<th>Name</th>
<th>Image</th>
<th>Price</th>
</tr>

<?php
$sql = "SELECT id,name ,image,price from tbl_product ";
$result = $connect-> query($sql);
$sql = "SELECT action from tbl_product ";
if($result-> num_rows > 0){
    while($row = $result->fetch_assoc()){
        ?>

        <tr>
            <td>
                <?php echo $row['id']?>
            </td>
        <td>
            <?php echo $row["name"]?>
        </td>
        <td> <?php echo"<img style='height:50px; width:50px' src=../images/".$row["image"].">";  ?></td>
        <td><?php echo $row['price'] ?></td>
         <td><div><form name='enable'  action='delete.php?id="<?php echo $row['id']?>"' method='POST' ><input type='submit' value='Delete' id="<?php echo $row['id']?>" ></form></div></td>
        <!-- <td><div><form  action='edit.php?id=" method='POST'><button>Edit</button></form></div></td> -->
        </tr>
        <?php
        
    }echo"</table>
    <div><form  action='add.php' method='POST'><button>Add</button></form></div>";
}else{
    echo " 0 records";
}
$connect-> close ();
?>
</table>
</body>
</html>
</script>

<?php
