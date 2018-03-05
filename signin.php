<?php 
require 'db.php';
session_start();
if(!isset($_SESSION['logged_in'])) {
	$_SESSION['logged_in'] = false;
}
if($_SESSION['logged_in'] == true) {
	$_SESSION['message'] = "You are already logged in!";
	header("location: error.php");
}
?>
<!DOCTYPE html>
<html lang="en-UK">
	<head>
		<title>People's Library</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/w3.css">
		<link rel="stylesheet" href="css/w3-theme-light-blue.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="icon" type="image/png" href="favicon.png"/>
	</head>
	
	<?php 
		if ($_SERVER['REQUEST_METHOD'] == 'POST') 
		{
			if (isset($_POST['login'])) { //user logging in
				require 'login.php';
			}
		}
	?>

	<body class="w3-light-grey w3-theme-indigo">
		<?php include('includes/header.php'); ?> 
		<form class="w3-modal-content w3-padding" method="POST" action="signin.php" style="max-width:400px;">
			<div class="w3-container">
			<p>
				<b>Enter Credentials to Log In</b>
			</p><p>
				<input type="email" class="w3-input" placeholder="Enter Email *" name="email" required>
			</p><p>
			<input type="password" class="w3-input" placeholder="Enter Password *" name="password" required>
			</p><p class="w3-center">
			<button type="submit" class="w3-button w3-orange" name="login">Login</button>
			</p><p class="w3-small">
			All fields marked with asterisk (*) are mandatory.<br /><br />
			Trouble Logging In?<br />
			<span><a href="forgot.php">Reset password</a></span>
			</p>
			</div>
		</form>
		<div class="w3-modal-content w3-padding w3-center" style="max-width:400px;">
			<a href="signup.php"><button type="submit" class="w3-button w3-orange" name="register">Create An Account</button></a>
		</div>

		<?php include('includes/footer.php'); ?>
	</body>
</html>