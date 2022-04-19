<?php
session_start();
if($_SESSION['username']){
?>
<!DOCTYPE html>
<html>
	<head>
	<title>SHOP HERE</title>
		<script src="../js/jquery.min.js"></script>
		<link rel="stylesheet" href="../css/bootstrap.min.css" />
		<script src="../js/bootstrap.min.js"></script>
		<style>
		.popover
		{
		    width: 100%;
		    max-width: 800px;
		}
		</style>
	</head>
	<body>
		<div class="container">
			<br />
			<h3 ><a href="#">	SHOP HERE</a></h3>
			<br />
			<nav class="navbar navbar-default" role="navigation">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Menu</span>
						<span class="glyphicon glyphicon-menu-hamburger"></span>
						</button>
						<a class="navbar-brand" href="#">Shopping Cart</a>
					</div>
					
					
					<div id="navbar-cart" class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
						<li>
								<a href="index.php" class="btn" data-placement="bottom" title="Shopping Cart">

									<span class="glyphicon ">Back</span>
									
								</a>
							</li>
                        <li>
								<a href="shop.php" id="" class="btn" data-placement="bottom" title="Shopping Cart">
									<span class="glyphicon glyphicon-home"> Shop</span>
								</a>
							</li>
							<li>
								<?php  
require('database_connection.php');
$total_first = 0;
$total_price = 0;
$total_item = 0; 
?>
								<a id="" class="" data-placement="bottom" title="Shopping Cart">
									<span class="glyphicon glyphicon-shopping-cart"></span>
									<span class="badge"></span>
									<span class="total_price">$<?php
									$sql = "SELECT * from cart WHERE `user_id` = $_SESSION[id]";
									$result = $connect-> query($sql);
									if($result-> num_rows > 0){
									while($row = $result->fetch_assoc()){
										$total_first = $total_first + ($row["product_quantity"] * $row["product_price"]);
										$total_item = $total_item + 1;
									
									}
								}
									echo number_format($total_first, 2)?></span>
								</a>
							</li>
						</ul>
					</div>
					
				</div>
			</nav>



			<div id="popover_content_wrapper" >
				<span id="cart_details">
				<?php



echo '
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
		?> 
		<tr>
		
			<td><?php echo $row["product_name"]?></td>
			<td><?php echo $row["product_quantity"]?></td>
			<td align="right">$ '<?php echo $row["product_price"]?>'</td>
			<td align="right">$ '<?php echo number_format($row["product_quantity"] * $row["product_price"], 2) ?>'</td>
			<td><form action='remove.php?id="<?php echo $row['id']?>"' method="POST"><input type="submit" value="Remove" id="<?php echo $row['id']?>" ></form></td>

		</tr>
		<?php
		$total_price = $total_price + ($row["product_quantity"] * $row["product_price"]);
		$total_item = $total_item + 1;
	
	}	echo '
	<tr>  
        <td colspan="3" align="right">Total</td>  
        <td align="right">$ '.number_format($total_price, 2).'</td>  
        <td></td>  
    </tr>
	';echo"</table>";
	}else{
		echo '
		<tr>
			<td colspan="5" align="center">
				Your Cart is Empty!
			</td>
		</tr>
		';
	}
		
		
	

echo '</table></div>';
$data = array(
	'total_price'		=>	'$' . number_format($total_price, 2),
	'total_item'		=>	$total_item
);	

// echo json_encode($data);


?>
				</span>
				<div >
					<?php 
				$sql = "SELECT * from cart WHERE `user_id` = $_SESSION[id]";
	$result = $connect-> query($sql);
	if($result-> num_rows > 0){
	if($row = $result->fetch_assoc()){
		?> 

					<a href="checkout.php" class="btn btn-primary" id="check_out_cart">
					<span class="glyphicon glyphicon-shopping-cart"></span> Check out
					</a>
			<a href="#" class="btn " id="check_out_cart">
			<form class="glyphicon glyphicon-trash" action='clear.php?id="<?php echo $row['id']?>"' method="POST"><input type="submit" value="Clear" id="<?php echo $row['id']?>" ></form>
		
			</a>
		
				</div>
			</div>
			

<?php }}?>

			</div> 
			
		</div>
	</body>
</html>

<script>  

	$('#cart-popover').popover({
		html : true,
        container: 'body',
        content:function(){
        	return $('#popover_content_wrapper').html();
        }
	});


	$(document).on('click', '.add_to_cart', function(){
		var product_id = $(this).attr("id");
		var product_name = $('#name'+product_id+'').val();
		var product_price = $('#price'+product_id+'').val();
		var product_quantity = $('#quantity'+product_id).val();
		var action = "add";
		if(product_quantity > 0)
		{
			$.ajax({
				url:"action.php",
				method:"POST",
				data:{product_id:product_id, product_name:product_name, product_price:product_price, product_quantity:product_quantity, action:action},
				success:function(data)
				{
					load_cart_data();
					
				}
			});
		}
		else
		{
			alert("Please Enter Number of Quantity");
		}
	});

</script>
<?php
}
else{
	header("location:index.php");
}
