<?php
/* Password reset process, updates database with new user password */
require 'db.php';
session_start();

// Make sure the form is being submitted with method="post"
if ($_SERVER['REQUEST_METHOD'] == 'POST') { 

    // Make sure the two passwords match
    if ( $_POST['newpassword'] == $_POST['conpassword'] ) { 
        $new_password = password_hash($_POST['newpassword'], PASSWORD_BCRYPT);
        
        // We get $_POST['email'] and $_POST['hash'] from the hidden input field of reset.php form
        $email = $mysqli->escape_string($_POST['email']);
        $hash = $mysqli->escape_string( md5( rand(0,1000) ) );
        
        $sql = "UPDATE user SET password='$new_password', hash='$hash' WHERE email='$email'";

        if ( $mysqli->query($sql) ) {
        $_SESSION['message'] = "Your password has been reset successfully!";
        header("location: success.php");    
        }
    }
    else {
        $_SESSION['message'] = "The passwords you entered did not match.
        <a href=\"http://localhost/minor/reset.php?email='.$email.'&hash='.$hash\">Click here</a> to try again!";
        header("location: error.php");
    }
}
?>