<?php
/* The password reset form, the link to this page is included
   from the forgot.php email message
*/
require 'db.php';
session_start();

// Make sure email and hash variables aren't empty
if( isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash']) )
{
    $email = $mysqli->escape_string($_GET['email']); 
    $hash = $mysqli->escape_string($_GET['hash']); 

    // Make sure user email with matching hash exist
    $result = $mysqli->query("SELECT * FROM user WHERE email='$email' AND hash='$hash'");

    if ( $result->num_rows == 0 )
    { 
        $_SESSION['message'] = "You have entered invalid URL for password reset!";
        header("location: error.php");
    }
}
else {
    $_SESSION['message'] = "Sorry, verification failed, try again!";
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

	<body class="w3-light-grey w3-theme-indigo">
		<?php include('includes/header.php'); ?> 
		<form class="w3-modal-content w3-padding" method="POST" action="reset_password.php" style="max-width:400px;">
			<div class="w3-container">
			<p>
				<b>Choose Your New Password</b>
			</p><p>
				<input type="password" class="w3-input" placeholder="Enter New Password" name="newpassword" required>
			</p><p>
				<input type="password" class="w3-input" placeholder="Confirm New Password" name="conpassword" required>
			</p>
				<input type="hidden" name="hash" value="<?= $hash ?>">
				<input type="hidden" name="email" value="<?= $email ?>">
      		<p class="w3-center">
				<button type="submit" class="w3-button w3-orange" name="reset">Change Password</button>
			</p>
			</div>
		</form>
		<?php include('includes/footer.php'); ?>
	</body>
</html>
