<?php 
require 'db.php';
session_start();
if(!isset($_SESSION['logged_in'])) {
	$_SESSION['logged_in'] = false;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
	if (isset($_POST['sendmessage'])) { //user logging in
		require 'message.php';
	}
}
?>
<!DOCTYPE html>
<html lang="en-UK">
	<head>
		<title>People's Library</title><?php
		include('includes/header.php'); ?> 
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