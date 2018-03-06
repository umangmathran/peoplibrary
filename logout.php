<?php
/* Log out process, unsets and destroys session variables */
require 'db.php';
session_start();
session_unset();
session_destroy();
include('signin.php');
?>
