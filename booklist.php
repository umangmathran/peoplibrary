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
	$results = $mysqli->query("SELECT * FROM owns WHERE email='$email'") or die($mysqli->error());
}
?>
<!DOCTYPE html>
<html lang="en-UK">
	<head>
		<title>People's Library</title><?php
		include('includes/header.php'); ?>
			<!-- Added Books Section -->
			<div class="w3-modal-content w3-padding" id="addedbook">
				<h4>Books that you have added:</h4><br />		
				<!-- Book Photo Grid-->
				<div class="w3-row-padding w3-padding-4 w3-center" id="booklist"><?php
				foreach ($results as $key => $book)	{
					$result = $mysqli->query("SELECT * FROM book WHERE bookid='$book[bookid]'") or die($mysqli->error());
					$currBook =  $result->fetch_assoc();
					echo '
					<div class="w3-quarter">
						<img src="'.$currBook['img'].'" alt="'.$currBook['title'].'" style="height:165px;" />
						<p>'.$currBook['title'].'</p>
					</div>';
				}			
				?> 
				</div>
			</div>
			<!-- End Added Books Section -->


		<?php include('includes/footer.php'); ?>
	</body>
</html>