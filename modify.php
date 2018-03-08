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

$email = $_SESSION['email'];
$result = $mysqli->query("SELECT * FROM user WHERE email='$email'");
$user = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
	if (isset($_POST['modifydet'])) { //modifying details

		// Make sure the password is correct. Verifying user
		if ( password_verify($_POST['password'], $user['password']) ) {
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$hostel = $_POST['hostel'];
			$roomno = $_POST['roomno'];
			$mobno = $_POST['mobno'];

			$sql = "UPDATE user SET fname='$fname', lname='$lname', hostel='$hostel', roomno='$roomno', phone='$mobno'
					WHERE email='$email'";

				if ( $mysqli->query($sql) ) {
				$_SESSION['message'] = "Your details have been updated successfully! <br />
				<a href=\"profile.php\" class=\"w3-text-orange w3-hover-text-black\" style=\"text-decoration:none\">Click here</a> to view your profile!";
				header("location: success.php");
				}
				else {
					$_SESSION['message'] = "Problem in updating your details.<br />
					<a href=\"modify.php\" class=\"w3-text-orange w3-hover-text-black\" style=\"text-decoration:none\">Click here</a> to try again!";
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
		<form class="w3-modal-content w3-padding" method="POST" action="modify.php" style="max-width:800px;">
			<div class="w3-container">
			<p>
				<b>Edit your Details (Blank will be treated as unchanged):</b>
			</p>
			<p class="w3-row">
				<div class="w3-col" style="width:48%">
					<label for="fname">First Name</label>
					<input type="text" class="w3-input" name="fname" value="<?php echo $user['fname']; ?>"></div>
				<div class="w3-col w3-right" style="width:48%">
					<label for="lname">Last Name</label>
					<input type="text" class="w3-input" name="lname" value="<?php echo $user['lname']; ?>"></div>
			</p>
			<p class="w3-row">
				<div class="w3-col" style="width:48%">
					<label for="hostel">Hostel</label>
					<input type="text" class="w3-input" name="hostel" value="<?php echo $user['hostel']; ?>"></div>
				<div class="w3-col w3-right" style="width:48%">
					<label for="roomno">Room no</label>
					<input type="number" class="w3-input" name="roomno" min="001" max="500" value="<?php echo $user['roomno']; ?>"></div>
			</p>
			<p class="w3-row">
			<div>
				<label for="mobno">Mobile Number</label>
				<input type="tel" class="w3-input" minlength="10" maxlength="10" name="mobno" value="<?php echo $user['phone']; ?>"></div>
			</p>
			<p>
				<b>Enter Password to Modify Details:</b>
			</p><p>
			<input type="password" class="w3-input" placeholder="Password *" name="password" required>
			</p>
			<p class="w3-center">
			<button type="submit" class="w3-button w3-orange" name="modifydet">Update Details</button>
			<button type="reset" class="w3-button w3-orange" name="reset">Reset</button>
			<a href="profile.php" style="text-decoration:none;"><button type="button" class="w3-button w3-orange">Cancel</button></a>
			</p><p class="w3-small">
			All fields marked with asterisk (*) are mandatory.<br/><br />
			Not your account?
			<span><a href="logout.php">Logout Now</a></span>
			</p>
			</div>
		</form>
		<?php include('includes/footer.php'); ?>
	</body>
</html>