<?php

//fetch_item.php

include('database_connection.php');

$query = "SELECT * FROM tbl_product ORDER BY id DESC";

$statement = $con->prepare($query);

if($statement->execute())
{
	$result = $statement->fetchAll();
	$output = '';
	foreach($result as $row)
	{
		$output .= '
		
		<div class="col-md-3" style="margin-top:12px;">  
            <div class="image-field" style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px; height:350px;" align="center">
				<form action="addcart.php" method="POST">

				<img src="../images/'.$row["image"].'" class="img-responsive" /><br />
				<h4 class="text-info">'.$row["name"].'</h4>
				<h4 class="text-danger">$ '.$row["price"].'</h4>
				<input type="text" name="quantity" id="quantity' . $row["id"].'" class="form-control" value="1" />
				<input type="hidden" name="hidden_name" id="name'.$row["id"].'" value="'.$row["name"].'" />
				<input type="hidden" name="hidden_price" id="price'.$row["id"].'" value="'.$row["price"].'" />
				<button type="submit" id="'.$row["id"].'" name="add_to_cart" class="btn btn-success form-control add_to_cart">Add to Cart</button>
				
				</form>
				



            </div>
        </div>
		';
	}
	echo $output;
}


?>