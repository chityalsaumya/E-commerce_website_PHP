<?php

require('connection.php');
session_start();
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
  }

  
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">           
	
	<title>Login Form</title>
</head>
<body>
<div>


</div>
	<div class="container">
		<form action="login_register.php" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Enter email or username</p>
		
			<div class="input-group">
				<input type="text" placeholder="Email or Username" name="email_username" required >
			</div>
			<div class="input-group">
				<input type="password" placeholder="New Password" name="resetpassword" required>
			<div class="input-group">
				<button type="submit" name="submitt" class="btn">Reset</button>
              

         
			
		</form>
	</div>
</body>
</html>