<?php
session_start();

include('database_connection.php');

if($_SESSION['username']){
?>
<!DOCTYPE html>
<html>
	<head>
		<title>SHOP WEBSITE</title>
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
			<h3 ><a href="#">Shop here</a></h3>
			<br />
			<nav class="navbar navbar-default" role="navigation">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Menu</span>
						<span class="glyphicon glyphicon-menu-hamburger"></span>
						</button>
						<a class="navbar-brand" href="#">Shopping</a>
					</div>
					
					
					<div id="navbar-cart" class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li>
								<a href="index.php" class="btn" data-placement="bottom" title="Shopping Cart">

									<span class="glyphicon ">Back</span>
									
								</a>
							</li>
							<li>
								<a href="cart.php" class="btn" data-placement="bottom" title="Shopping Cart">

									<span class="glyphicon glyphicon-shopping-cart">Cart</span>
									<span class="badge">
										<?php

$count = 0;
$sql = "SELECT * from cart WHERE `user_id` = $_SESSION[id]";
$result = $connect-> query($sql);
if($result-> num_rows > 0){
while($row = $result->fetch_assoc()){
	$count +=1;
}	
}
echo $count;
?>
									</span>
									
								</a>
							</li>
							<li>
								<a>
								<form action="" method="POST">
									<label for="">Search</label>
									<input type="text" name="search" required>
									<input type="submit" name="submitsearch">
								</form>
								</a>
							</li>
						</ul>
					</div>
					
				</div>
			</nav>


		


			</div>
			
		</div>
	</body>
</html>

<?php
if(isset($_POST['submitsearch'])){
	$str = $_POST['search'];
	$sth = $con->prepare("SELECT * FROM `tbl_product` WHERE name = '$str'");

	$sth->setFetchMode(PDO::FETCH_OBJ);
	$sth-> execute();
	$output = '';
	if($row = $sth->fetch()){
		
		$output .= '
		<div  style="display:flex;  justify-content: space-evenly;
		flex-direction: column; " align="center">
		<div class="col-md-3" style="margin-top:12px;">  
            <div class="image-field" style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px; height:350px;" align="center">

            <form action="addcart.php" method="POST">

			<img src="../images/'.$row->image.'" class="img-responsive" /><br />
			<h4 class="text-info">'.$row->name.'</h4>
			<h4 class="text-danger">$ '.$row->price.'</h4>
			<input type="text" name="quantity" id="quantity' . $row->id.'" class="form-control" value="1" />
			<input type="hidden" name="hidden_name" id="name'.$row->id.'" value="'.$row->name.'" />
			<input type="hidden" name="hidden_price" id="price'.$row->id.'" value="'.$row->price.'" />
			<button type="submit" id="'.$row->id.'" name="add_to_cart" class="btn btn-success form-control add_to_cart">Add to Cart</button>

			</form>
            </div>
        </div>
		<hr>
		<div style="border:1px solid #333; font-size: 20px; background-color:#c193b7; border-radius:40px; padding:10px; margin:20px" align="center">All Items</div>
		<div id="display_item">";
		</div>
		
	
		';
		echo $output;
	}else{
		echo "<div style='border:1px solid #333; background-color:#f1f1f1; border-radius:5px; font-size:20px; margin: 30px ;padding:25px;' align='center'> No Search Results Found</div>";
		echo "<hr>";
		echo "<div style='border:1px solid #333; font-size: 20px; background-color:#c193b7; border-radius:40px; padding:10px; margin:20px' align='center'>All Items</div>
		<div id='display_item'>";
	}

	
}elseif(isset($_POST['submitsearch'])== null){
	
		echo "<div style='border:1px solid #333; font-size: 20px; background-color:#c193b7; border-radius:40px; padding:10px; margin:20px' align='center'> Items</div>
		<div id='display_item'>";
}



?>

<script>  
$(document).ready(function(){

	load_product();

	function load_product()
	{
		$.ajax({
			url:"fetch_item.php",
			method:"POST",
			success:function(data)
			{
				$('#display_item').html(data);
			}
		});
	}

	function load_cart_data()
	{
		$.ajax({
			url:"fetch_cart.php",
			method:"POST",
			dataType:"json",
			success:function(data)
			{
				$('#cart_details').html(data.cart_details);
				$('.total_price').text(data.total_price);
				$('.badge').text(data.total_item);
			}
		});
	}

	$('#cart-popover').popover({
		html : true,
        container: 'body',
        content:function(){
        	return $('#popover_content_wrapper').html();
        }
	});

	
	

	$(document).on('click', '.add_to_wishlist', function(){
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


	$(document).on('click', '.delete', function(){
		var product_id = $(this).attr("id");
		var action = 'remove';
		if(confirm("Are you sure you want to remove this product?"))
		{
			$.ajax({
				url:"action.php",
				method:"POST",
				data:{product_id:product_id, action:action},
				success:function()
				{
					load_cart_data();
					$('#cart-popover').popover('hide');
				}
			})
		}
		else
		{
			return false;
		}
	});

	$(document).on('click', '#clear_cart', function(){
		var action = 'empty';
		$.ajax({
			url:"action.php",
			method:"POST",
			data:{action:action},
			success:function()
			{
				load_cart_data();
				$('#cart-popover').popover('hide');
			}
		});
	});
    
});

</script>

<?php
}
else{
	header("location:index.php");
}
