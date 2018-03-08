<?php 
require 'db.php';
session_start();
if(!isset($_SESSION['logged_in'])) {
	$_SESSION['logged_in'] = false;
}
// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in before viewing the profile page!";
  header("location: error.php");    
}
else {
    // Use temporary variables for session variables
    $email = $_SESSION['email'];
    $result = $mysqli->query("SELECT * FROM user WHERE email='$email'") or die($mysqli->error());
    $user =  $result->fetch_assoc();
}
?>
<!DOCTYPE html>
<html lang="en-UK">
	<head>
        <title>People's Library</title><?php
        include('includes/header.php'); ?> 
		    <div class="w3-modal-content w3-padding" action="addbook.php" method="POST" style="max-width:800px;">
                <h1 class="w3-center">Welcome, <?php echo $user['fname'] ?>!</h1>
                <div class="w3-row w3-container">
                    <div class="w3-half">
                        <h4>Your Details:</h4>
                            Name: <?php echo $user['fname'].' '.$user['lname']; ?> 
                            <br />Email ID: <?php echo $user['email']; ?> 
                            <br />Mobile No: <?php echo $user['phone']; ?> 
                            <br />Hostel: <?php echo $user['hostel']; ?> 
                            <br />Room No: <?php echo $user['roomno']; ?> 
                    </div>
                    <div class="w3-half w3-right-align">
                    <p class="w3-display-bottomright" style="margin-right: 20px;">
                        <a href="modify.php" class="w3-text-orange w3-hover-text-black" style="text-decoration:none">Edit Personal Details <i class="fa fa-pencil fa-fw"></i></a><br/>
                        <a href="changepassword.php" class="w3-text-orange w3-hover-text-black" style="text-decoration:none">Change Password <i class="fa fa-gear fa-fw"></i></a></p>
                    </div>
                </div>
                <?php 
                // Keep reminding the user this account is not active, until they activate
                if ( !$user['activated'] ){
                echo
                '<div class="w3-container w3-small w3-center w3-text-red">
                <p><br />Your account is still unverified. Please verify your account by clicking the link sent on your email ID!</p>
                </div>';
                }
                ?> 
                <br /><br /><br />
            </div><?php
            include('includes/footer.php'); ?>
    </body>
</html>