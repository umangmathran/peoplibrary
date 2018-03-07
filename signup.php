<?php 
require 'db.php';
session_start();
if(!isset($_SESSION['logged_in'])) {
	$_SESSION['logged_in'] = false;
}
if($_SESSION['logged_in'] == true) {
	$_SESSION['message'] = "You already signed up and are logged in!<br />
	In case this is not your account,
	<a href=\"logout.php\" class=\"w3-hover-text-black w3-text-orange\" style=\"text-decoration: none;\"><i class=\"fa fa-sign-out\"></i> Logout</a>.";
	header("location: error.php");
}
 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
	if (isset($_POST['register'])) { //user registering
		require 'register.php';
	}
}
?>
<!DOCTYPE html>
<html lang="en-UK">
	<head>
		<title>People's Library</title><?php
		include('includes/header.php'); ?> 
		<form class="w3-modal-content w3-padding" method="post" action="signup.php" style="max-width:800px;">
			<div class="w3-container">
			<p>
				<b><u>User Registration</u></b>
			</p>
			<p class="w3-row">
				<input type="text" class="w3-col w3-input" style="width:48%" placeholder="First Name *" name="fname" required>
				<input type="text" class="w3-col w3-input w3-right" style="width:48%" placeholder="Last Name *" name="lname" required>
			</p>
			<p>
				<input type="email" class="w3-input" placeholder="Email ID *" name="email" required>
			</p>
			<p>
			<input type="password" class="w3-input" placeholder="Password (Minimum Length 8) *" minlength="8" name="password" required>
			</p>
			<p>
				<b>Contact Details:</b>
			</p>
			<p class="w3-row">
				<input type="text" class="w3-col w3-input" style="width:48%" placeholder="Hostel *" name="hostel" required>
				<input type="number" class="w3-col w3-input w3-right" style="width:48%" placeholder="Room No *" name="roomno" min="001" max="500" required>
			</p>
			<p>
			<input type="tel" class="w3-input" placeholder="Mobile Number *" minlength="10" maxlength="10" name="mobno" required>
			</p>
			<p class="w3-center">
			<button type="submit" class="w3-button w3-orange" name="register">Register</button>
			<button type="reset" class="w3-button w3-orange">Reset All Fields</button>
			</p><p class="w3-small">
			All fields marked with asterisk (*) are mandatory.
			</p>
			</div>
		</form>
		<?php include('includes/footer.php'); ?>
	</body>
</html>