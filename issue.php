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
	<?php 
		if ($_SERVER['REQUEST_METHOD'] == 'POST') 
		{
			if (isset($_POST['sendmessage'])) { //user logging in
				require 'message.php';
			}
		}
	?>
	<body class="w3-light-grey w3-theme-indigo">
		<?php include('includes/header.php'); ?> 
		<div class="w3-modal-content w3-padding" style="max-width:800px;">
			<div>
				<p><strong>You might send us your queries and suggestions below:</strong></p>
			</div>
			
			<form method="POST" action="contactus.php">
				<input class="w3-input" type="text" placeholder="Name" required name="name">
				<input class="w3-input w3-section" type="email" placeholder="Email" required name="email">
				<input class="w3-input w3-section" type="text" placeholder="Subject" required name="subject">
				<textarea  class="w3-input w3-section" type="text" placeholder="Message" name="comment" maxlength="1000" style="resize:vertical" rows="6"></textarea>
				<div class="w3-center"><button class="w3-button w3-orange w3-section" type="submit" name="sendmessage">
					<i class="fa fa-paper-plane"></i> SEND MESSAGE
				</button></div>
			</form>
		</div>
		<?php include('includes/footer.php'); ?>
	</body>
</html>