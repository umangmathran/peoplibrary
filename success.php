<?php 
require 'db.php';
session_start();
if(!isset($_SESSION['logged_in'])) {
	$_SESSION['logged_in'] = false;
}
?><!DOCTYPE html>
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
	<body class="w3-light-grey w3-theme-indigo">
		<?php include('includes/header.php'); ?> 
		<div class="w3-modal-content w3-padding" style="max-width:600px;">
			<div class="w3-container">
				<h1>Success!</h1>
				<h4>
				<?php 
				if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ):
					echo $_SESSION['message'];    
				else:
					header( "location: index.php" );
				endif;
				?>
				</h4>     
			    <br />
				<p class="w3-center">
				<a href="index.php" ><button class="w3-button"/>Go To Home</button></a>
			    </p>
			</div>
		</div>
		<?php include('includes/footer.php'); ?>
	</body>
</html>