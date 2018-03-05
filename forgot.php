<?php 
require 'db.php';
session_start();
if(!isset($_SESSION['logged_in'])) {
	$_SESSION['logged_in'] = false;
}

// Check if form submitted with method="post"
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) 
{   
    $email = $mysqli->escape_string($_POST['email']);
    $result = $mysqli->query("SELECT * FROM user WHERE email='$email'");

    if ( $result->num_rows == 0 ) // User doesn't exist
    { 
        $_SESSION['message'] = "User with that email doesn't exist!";
        header("location: error.php");
    }
    else { // User exists (num_rows != 0)

        $user = $result->fetch_assoc(); // $user becomes array with user data
        
        $email = $user['email'];
        $hash = $user['hash'];
        $fname = $user['fname'];

        // Session message to display on success.php
        $_SESSION['message'] = "<p>Please check your email <span>$email</span>"
        . " for a confirmation link to complete your password reset!</p>";

        // Send registration confirmation link (reset.php)
        $to = $email;
        $subject = 'Password Reset Link ( clevertechie.com )';
        $message_body = '
        Hello '.$first_name.',

        You have requested password reset!

        Please click this link to reset your password:
        http://localhost/minor/reset.php?email='.$email.'&hash='.$hash;  

        mail($to, $subject, $message_body);
        
        header("location: success.php");
  }
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
		<form class="w3-modal-content w3-padding" method="POST" action="forgot.php" style="max-width:400px;">
			<div class="w3-container">
			<p>
				<b>Reset Your Password</b>
			</p><p>
				<input type="email" class="w3-input" placeholder="Enter Email" name="email" required>
			</p>
            <p class="w3-center">
			<button type="submit" class="w3-button w3-orange" name="reset">Send Reset Link</button>
			</p>
			</div>
		</form>

		<?php include('includes/footer.php'); ?>
	</body>
</html>