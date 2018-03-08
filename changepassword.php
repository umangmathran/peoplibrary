<?php 
require 'db.php';
session_start();
if(!isset($_SESSION['logged_in'])) {
	$_SESSION['logged_in'] = false;
}

if($_SESSION['logged_in'] == false) {
	$_SESSION['message'] = "You need to log in first!";
	header("location: error.php");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
	if (isset($_POST['changepw'])) { //changing password

		$email = $_SESSION['email'];
		$result = $mysqli->query("SELECT * FROM user WHERE email='$email'");
		$user = $result->fetch_assoc();

		if ( password_verify($_POST['oldpw'], $user['password']) ) {
			// Make sure the two passwords match
			if ( $_POST['newpw'] == $_POST['conpw'] ) { 
				$new_password = password_hash($_POST['newpw'], PASSWORD_BCRYPT);
				
				$sql = "UPDATE user SET password='$new_password' WHERE email='$email'";

				if ( $mysqli->query($sql) ) {
				$_SESSION['message'] = "Your password has been changed successfully!";
				header("location: success.php");
				}
				else {
					$_SESSION['message'] = "Problem in changing your password.
					<a href=\"changepassword.php\" class=\"w3-text-orange w3-hover-text-black\" style=\"text-decoration:none\">Click here</a> to try again!";
					header("location: error.php");
				}
			}
			else {
				$_SESSION['message'] = "The passwords you entered did not match.
				<a href=\"changepassword.php\" class=\"w3-text-orange w3-hover-text-black\" style=\"text-decoration:none\">Click here</a> to try again!";
				header("location: error.php");
			}
		}
		else {
			$_SESSION['message'] = "You have entered incorrect password.
			<a href=\"changepassword.php\" class=\"w3-text-orange w3-hover-text-black\" style=\"text-decoration:none\">Click here</a> to try again!";
			header("location: error.php");
		}
		
	}
}
?>
<!DOCTYPE html>
<html lang="en-UK">
	<head>
		<title>People's Library</title><?php
		include('includes/header.php'); ?> 
		<form class="w3-modal-content w3-padding" method="POST" action="changepassword.php" style="max-width:400px;">
			<div class="w3-container">
			<p>
				<b>Change Password</b>
			</p><p>
				<input type="password" class="w3-input" placeholder="Enter Old Password *" name="oldpw" required>
			</p><p>
				<input type="password" class="w3-input" placeholder="Enter New Password *" name="newpw" required>
			</p><p>
				<input type="password" class="w3-input" placeholder="Confirm New Password *" name="conpw" required>
			</p><p class="w3-center">
				<button type="submit" class="w3-button w3-orange" name="changepw">Change Password</button>
				<a href="profile.php" style="text-decoration:none;"><button type="button" class="w3-button w3-orange">Cancel</button></a>
			</p><p class="w3-small">
				All fields marked with asterisk (*) are mandatory.<br /><br />
				Not your account?
			<span><a href="logout.php">Logout Now</a></span>
			</p>
			</div>
		</form>

		<?php include('includes/footer.php'); ?>
	</body>
</html>