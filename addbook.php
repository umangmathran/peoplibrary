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
		<title>People's Library</title><?php
		include('includes/header.php'); ?> 		
			<div class="w3-modal-content w3-padding" style="max-width:800px;">
				<form class="w3-container" action="addbook.php" method="POST">
					<p>
						<b>Search For Book:</b>
					</p>
					</p><p class="w3-small">
						<input type="text" class="w3-input" placeholder="ISBN *" name="isbn">
						(10 or 13 digit code generally behind the book)
			<!--		</p><p class="w3-small">
						<input type="text" class="w3-input" placeholder="Title" name="title">
					</p><p class="w3-small">
						<input type="text" class="w3-input" placeholder="Author" name="author"> -->
					</p><p class="w3-center">
						<button type="submit" class="w3-button w3-orange" name="addbook">Search</button>
					</p><p class="w3-small">
					All fields marked with asterisk (*) are mandatory.
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

						$isbnint = str_replace(array('+','-'), '', filter_var($_POST['isbn'], FILTER_SANITIZE_NUMBER_INT));
		//				$title = $_POST['title'];

						// set options for your request
						$optParams = [];

						
						// make the API call to retrieve some search results
						$results = $service->volumes->listVolumes('isbn:'.$isbnint, $optParams);
						echo '<br/>';
						foreach ( $results as $key => $item ) {
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
									<input type=\"hidden\" name=\"bookid\" value=\"".$item['id']."\">
									<input type=\"hidden\" name=\"bisbn\" value=\"".$item['volumeInfo']['industryIdentifiers'][0]['identifier']."\">
									<input type=\"hidden\" name=\"btitle\" value=\"".$item['volumeInfo']['title']."\">
									<input type=\"hidden\" name=\"bimg\" value=\"".$item['volumeInfo']['imageLinks']['thumbnail']."\">
									<input type=\"hidden\" name=\"bpub\" value=\"".$item['volumeInfo']['publisher']."\">
									<input type=\"hidden\" name=\"bpubd\" value=\"".$item['volumeInfo']['publishedDate']."\">
									<input type=\"hidden\" name=\"blang\" value=\"".$item['volumeInfo']['language']."\">
									<input type=\"hidden\" name=\"brate\" value=\"".$item['volumeInfo']['averageRating']."\">
									<input type=\"hidden\" name=\"bratecount\" value=\"".$item['volumeInfo']['ratingsCount']."\">
									<button type=\"submit\" class=\"w3-button w3-right w3-orange\" name=\"submit\">Add This Book</button>
								</form>
							</div> \n <hr/> \n";
						}
					}
					echo 'Did not find the book that you were trying to add?<br />
					Send us a request <a href="issue.php" class="w3-text-orange w3-hover-text-black">here</a> and we will notify you as soon as the book is added.';
					
				}
			?>
			</div>
		<?php include('includes/footer.php'); ?>
	</body>
</html>