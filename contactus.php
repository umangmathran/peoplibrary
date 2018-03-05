<?php 
require 'db.php';
session_start();
if(!isset($_SESSION['logged_in'])) {
	$_SESSION['logged_in'] = false;
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
	<body class="w3-light-grey w3-theme-indigo">
		<?php include('includes/header.php'); ?> 
		<div class="w3-modal-content w3-padding" style="max-width:800px;">
			<div class="w3-panel w3-center">
				<h1>CONTACT US</h1>
			</div>
			<div class="w3-row w3-section w3-center"><p class="w3-left-align">
				<div class="w3-left-align w3-half w3-padding-left"><strong>PEOPLE'S LIBRARY</strong><br />
				IIT (ISM)<br />
				Dhanabad - 826 004<br />
				Jharkhand
				</div>
				<div class="w3-left-align w3-half w3-padding-left"><strong>Contact No(s):</strong><br>
				+91 9572 385 201<br><br>
					<strong><a href="mailto:info@peopleslibrary.com" style="text-decoration:none;" class="w3-text-orange w3-hover-text-grey">info@peopleslibrary.com</a></strong>
				</div>
			</div>
		</div>
		<?php include('includes/footer.php'); ?>
	</body>
</html>