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
    $fname = $_SESSION['first_name'];
    $lname = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
}
?>
<!DOCTYPE html>
<html lang="en-UK">
	<head>
        <title>People's Library</title><?php
        include('includes/header.php'); ?> 
		    <div class="w3-modal-content w3-padding" action="addbook.php" method="POST" style="max-width:800px;">
                <h1 class="w3-center">Welcome, <?php echo $fname ?>!</h1>
                <?php /*
                // Keep reminding the user this account is not active, until they activate
                if ( !$active ){
                echo
                '<div class="info">
                Account is unverified, please confirm your email by clicking
                on the email link!
                </div>';
                }
                */
                ?> 
                <div class="w3-row w3-container">
                    <div class="w3-half">
                        <h4>Your Details:</h4>
                            Name: <?php echo $fname.' '.$lname; ?> 
                            <br />Email ID: <?php echo $email; ?> 
                            <br />Mobile No: <?php echo $email; ?> 
                            <br />Hostel: <?php echo $email; ?> 
                            <br />Room No: <?php echo $email; ?> 
                    </div>
                    <div class="w3-half w3-right-align">
                    <p><br /><br />
                        <a href="modify.php" class="w3-text-orange w3-hover-text-black" style="text-decoration:none">Edit Personal Details <i class="fa fa-pencil"></i></a><br/>
                        <a href="changepassword.php" class="w3-text-orange w3-hover-text-black" style="text-decoration:none">Change Password <i class="fa fa-gear"></i></a></p>
                    </div>
                </div>
            </div><?php
            include('includes/footer.php'); ?>
    </body>
</html>