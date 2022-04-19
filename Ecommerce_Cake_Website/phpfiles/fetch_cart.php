<?php

//fetch_cart.php
echo "fetched";
session_start();
require('database_connection.php');

$total_price = 0;
$total_item = 0;

$output = '
<div class="table-responsive" id="order_table">
	<table class="table table-bordered table-striped">
		<tr>  
            <th width="40%">Product Name</th>  
            <th width="10%">Quantity</th>  
            <th width="20%">Price</th>  
            <th width="15%">Total</th>  
            <th width="5%">Action</th>  
        </tr>
';


	$sql = "SELECT * from cart WHERE `user_id` = $_SESSION[id]";
	$result = $connect-> query($sql);
	if($result-> num_rows > 0){
	while($row = $result->fetch_assoc()){
		$output .= '
		<tr>
			<td>'.$row["product_name"].'</td>
			<td>'.$row["product_quantity"].'</td>
			<td align="right">$ '.$row["product_price"].'</td>
			<td align="right">$ '.number_format($row["product_quantity"] * $row["product_price"], 2).'</td>
			<td><button name="delete" class="btn btn-danger btn-xs delete" id="'. $row["product_id"].'">Remove</button></td>
		</tr>
		';
		$total_price = $total_price + ($row["product_quantity"] * $row["product_price"]);
		$total_item = $total_item + 1;
	}echo"</table>";
	}else{
		$output .= '
		<tr>
			<td colspan="5" align="center">
				Your Cart is Empty!
			</td>
		</tr>
		';
	}
		
		
	$output .= '
	<tr>  
        <td colspan="3" align="right">Total</td>  
        <td align="right">$ '.number_format($total_price, 2).'</td>  
        <td></td>  
    </tr>
	';

$output .= '</table></div>';
$data = array(
	'cart_details'		=>	$output,
	'total_price'		=>	'$' . number_format($total_price, 2),
	'total_item'		=>	$total_item
);	

echo json_encode($data);


?>