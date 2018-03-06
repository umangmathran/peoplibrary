<?php 
require 'db.php';
session_start();
if(!isset($_SESSION['logged_in'])) {
	$_SESSION['logged_in'] = false;
}
?>
<!DOCTYPE html>
<html lang="en-UK">
	<head>
		<title>People's Library</title><?php
		include('includes/header.php'); ?> 


		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />

		


		<?php include('includes/footer.php'); ?>
	</body>
</html>