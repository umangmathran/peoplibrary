<?php 
require 'db.php';
session_start();
if(!isset($_SESSION['logged_in'])) {
	$_SESSION['logged_in'] = false;
}
?><!DOCTYPE html>
<html lang="en-UK">
	<head>
		<title>People's Library</title><?php
		include('includes/header.php'); ?> 
		<div class="w3-modal-content w3-padding" style="max-width:600px;">
			<div class="w3-container">
				<h1>Success!</h1>
				<h4>
				<?php 
				if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ):
					echo $_SESSION['message'];    
				else:
					header( "location: index.php" );
				endif;
				?>
				</h4>     
			    <br />
				<p class="w3-center">
				<a href="index.php" ><button class="w3-button"/>Go To Home</button></a>
			    </p>
			</div>
		</div>
		<?php include('includes/footer.php'); ?>
	</body>
</html>