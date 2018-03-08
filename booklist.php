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
			<div class="w3-modal-content w3-padding">
				<h4>Books that you have added:</h4>
				<form class="w3-display-topright" style="margin-right:15px; margin-top:15px;">
					<input type="search" class="w3-input" style="padding-right:55px" name="search" placeholder="Search In Added Book" />
					<button type="button" class="w3-button w3-orange w3-display-right" name="searchadded"><i class="fa fa-search fa-fw"></i></button>
				</form>
				<br />
				<!-- Book Photo Grid-->
				<div class="w3-row-padding w3-padding-4 w3-center w3-display-container" id="booklist"><?php
				foreach ($results as $key => $book)	{
					$result = $mysqli->query("SELECT * FROM book WHERE bookid='$book[bookid]'") or die($mysqli->error());
					$currBook =  $result->fetch_assoc();
					echo '
					<div class="w3-quarter addedBooks w3-padding">
						<img src="'.$currBook['img'].'" alt="'.$currBook['title'].'" style="height:165px;" />
						<p>'.$currBook['title'].'</p>
					</div>';
				}
				if($key > 3) {
					$loop = 1;
					foreach ($results as $key => $book)	{
						$result = $mysqli->query("SELECT * FROM book WHERE bookid='$book[bookid]'") or die($mysqli->error());
						$currBook =  $result->fetch_assoc();
						echo '
					<div class="w3-quarter addedBooks w3-padding">
						<img src="'.$currBook['img'].'" alt="'.$currBook['title'].'" style="height:165px;" />
						<p>'.$currBook['title'].'</p>
					</div>';
						if($loop++ == 3) break;
					}
				}
				?> 
					<button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
					<button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
				</div>
			</div>
			<script>
				var slideIndex = 1;
				showDivs(slideIndex);

				function plusDivs(n) {
					showDivs(slideIndex += n);
				}

				function showDivs(n) {
					var i;
					var x = document.getElementsByClassName("addedBooks");
					if (n > x.length-3) {slideIndex = 1}
					if (n < 1) {slideIndex = x.length-3}
					for (i = 0; i < x.length; i++) {
						x[i].style.display = "none";  
					}

					for(i=0; i < 4; i++){
						x[(slideIndex+i-1)%x.length].style.display = "block";
					}
				}
			</script>
			<!-- End Added Books Section -->


		<?php include('includes/footer.php'); ?>
	</body>
</html>