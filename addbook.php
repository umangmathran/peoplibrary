<?php 
require 'db.php';
session_start();
if(!isset($_SESSION['logged_in'])) {
	$_SESSION['logged_in'] = false;
}
if ( $_SESSION['logged_in'] != 1 ) {
	$_SESSION['message'] = "You must log in before adding book to share!";
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
		
		<div class="w3-modal-content w3-padding" style="max-width:800px;">
			<form class="w3-container" action="addbook.php" method="POST">
			<p>
				<b>Search by ISBN:</b>
				<br />ISBN is a 10 or 13 digit code behind the book.
			</p><p>
				<input type="text" class="w3-input" placeholder="Enter ISBN" name="isbn" required>
			</p><p class="w3-center">
			<button type="submit" class="w3-button w3-orange" name="addbook">Search</button>

			</p>
		</form>
			<?php
				if ($_SERVER['REQUEST_METHOD'] == 'POST') 
				{
					if (isset($_POST['addbook'])) {
						require_once 'D:/_XAMPP/htdocs/minor/vendor/autoload.php';

						// API key here
						$API_KEY = 'AIzaSyDU-z__on-RyM4kDjm7gXj0Ip0C_EJ98Ok';

						// instantiate the Google API Client
						$client = new Google_Client();
						$client->setApplicationName("Google Books with PHP");
						$client->setDeveloperKey( $API_KEY );

						// get an instance of the Google Books client
						$service = new Google_Service_Books($client);

						// set options for your request
						$optParams = [];

						$isbnint = filter_var($_POST['isbn'], FILTER_SANITIZE_NUMBER_INT);

						// make the API call to retrieve some search results
						$results = $service->volumes->listVolumes('isbn:'.$isbnint, $optParams);
						echo '<br/>';
						foreach ( $results as $item ) {
							$link = $item['volumeInfo']['imageLinks']['thumbnail'];
							echo '
							<div class="w3-row">
								<div class="w3-quarter">
									<img class="w3-image" src="';
								echo $link;
								echo '" /><br />
								</div>
								<div class="w3-quarter w3-right-align">
									<b>Name: <br />
									Google Books: <br />
									Publisher: <br />
									Published Date: <br />
									Authors: <br />
									Language: <br />
									Rating: <br />
									Rated By: </b><br />
								</div>
								<div class="w3-half">';

									echo $item['volumeInfo']['title'], "<br /> \n";
									echo '<a href="' . $item['volumeInfo']['previewLink'] . '">' . 'Link to Google Books' . '</a>', "<br /> \n";
									echo $item['volumeInfo']['publisher'], "<br /> \n";
									echo $item['volumeInfo']['publishedDate'], "<br /> \n";
									echo $item['volumeInfo']['authors'][0], "<br /> \n";
									echo $item['volumeInfo']['language'], "<br /> \n";
									echo $item['volumeInfo']['averageRating'], "<br /> \n";
									echo $item['volumeInfo']['ratingsCount'], "<br /> \n";
								echo "</div>";
								echo "<form class=\"w3-padding\" method=\"POST\" action=\"addsbook.php\">
									<button type=\"submit\" class=\"w3-button w3-right w3-orange\" name=\"".$item['id']."\">Add This Book</button>
								</form>
							</div> \n <hr/> \n";
						}
					}
				}
			?>
			</div>
		<?php include('includes/footer.php'); ?>
	</body>
</html>