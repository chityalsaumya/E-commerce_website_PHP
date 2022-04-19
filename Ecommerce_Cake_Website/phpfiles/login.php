<?php

include('connection.php');

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">           
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>   -->
	<title>Login Form</title>
</head>
<body>
<div>


</div>
	<div class="container">
		<form action="login_register.php" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login Here</p>
		
			<div class="input-group">
				<input type="text" placeholder="Email or Username" name="email_username" required >
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" required>
            </div>
            <input type="text" id='action' name="action" value="0" hidden>
			<div class="input-group">
				<button type="submit" name="login" class="btn">Login</button>
			</div>
			<div class="input-group"><a href="reset-password.php"> Forgot your password?</a></div>
			<div class="input-group"><a  href="index.php"> <- Go Back</a> </div>
 	
			
		</form>
	</div>
</body>
</html>