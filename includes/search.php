<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
	if (isset($_POST['searchbook'])) { //searching book

		$query = $_POST['query'];
		
		$result = $mysqli->query("SELECT * FROM book WHERE title like '%$query%'") or die($mysqli->error());

		if ( $result->num_rows == 0 ) {
			$_SESSION['message'] = 'No such book found!';
			header("location: error.php");

		}
		else {
			echo 'BOOK FOUND!';
		}
	}
}

echo '			<form class="w3-display-topmiddle" method="POST" action="index.php" style="margin-top:90px;">
				<input type="search" class="w3-input" style="padding-right:55px; width:350px;" name="query" placeholder="Search Book By Title" required />
				<button type="submit" class="w3-button w3-orange w3-display-topright" name="searchbook"><i class="fa fa-search fa-fw"></i></button>
				<br /><br />
				<a href="advsearch.php" style="text-decoration:none;">
				<button type="button" class="w3-button w3-orange w3-display-bottommiddle" name="advsearch">Advanced Search <i class="fab fa-searchengin fa-fw"></i></button>
				</a>
			</form>
';
?>