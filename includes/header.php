<?php
	echo '
		<!-- Navigation Bar -->
		<div class="w3-top w3-bar w3-border-bottom w3-medium w3-hide-small w3-hide-medium w3-theme-dark">
			<a href="index.php" class="w3-bar-item"><img src="logo.png" style="max-height:60px;" /></a>
			<form class="w3-display-middle">
				<input type="search" class="w3-threequarter w3-input" name="search" placeholder="Search for Book.." />
				<button type="button" class="w3-button w3-orange"><i class="fa fa-search fa-fw"></i></button>
			</form>
			<div class="w3-display-right">
			';
		if($_SESSION['logged_in'] == false) {
			echo '
			<a href="signin.php" class="w3-button w3-hover-none w3-hover-text-orange"><i class="fa fa-user"></i> Sign in</a>
			<a href="signup.php" class="w3-button w3-hover-none w3-hover-text-orange"><i class="fa fa-user-plus"></i> Sign up</a>';
		}
		else {
			echo '
			<a href="profile.php" class="w3-button w3-hover-none w3-hover-text-orange"><i class="fa fa-user"></i> My Account</a>
			<a href="addbook.php" class="w3-button w3-hover-none w3-hover-text-orange"><i class="fa fa-plus"></i> Add Books</a>
			<a href="booklist.php" class="w3-button w3-hover-none w3-hover-text-orange"><i class="fa fa-book"></i> My Booklists</a>
			<a href="logout.php" class="w3-button w3-hover-none w3-hover-text-orange"><i class="fa fa-sign-out"></i> Logout</a>';
		}
		echo '
			</div>
		</div>
		<div class="w3-bar w3-top w3-border-bottom w3-medium w3-hide-large w3-theme-dark">
			<a href="index.php" class="w3-bar-item w3-left"><img src="logo.png" style="max-height:60px;" /></a>
			<div class="w3-display-right">
			';
		if($_SESSION['logged_in'] == false) {
			echo '
			<a href="signin.php" class="w3-button w3-hover-none w3-hover-text-orange"><i class="fa fa-user"></i></a>
			<a href="signup.php" class="w3-button w3-hover-none w3-hover-text-orange"><i class="fa fa-user-plus"></i></a>';
		}
		else {
			echo '
			<a href="profile.php" class="w3-button w3-hover-none w3-hover-text-orange"><i class="fa fa-user"></i></a>
			<a href="addbook.php" class="w3-button w3-hover-none w3-hover-text-orange"><i class="fa fa-plus"></i></a>
			<a href="booklist.php" class="w3-button w3-hover-none w3-hover-text-orange"><i class="fa fa-book"></i></a>
			<a href="logout.php" class="w3-button w3-hover-none w3-hover-text-orange"><i class="fa fa-sign-out"></i></a>';
		}
		echo '
			</div>
		</div>
		<form class="w3-display-topmiddle w3-hide-large w3-hide-medium" style="margin-top:85px;">
			<input type="search" class="w3-threequarter w3-input" style="padding-right:55px" name="search" placeholder="Search for Book.." />
			<button type="button" class="w3-button w3-orange w3-display-right"><i class="fa fa-search fa-fw"></i></button>
		</form>
		<form class="w3-display-topmiddle w3-hide-large w3-hide-small" style="margin-top:85px;">
			<input type="search" class="w3-threequarter w3-input" name="search" placeholder="Search for Book.." />
			<button type="button" class="w3-button w3-orange w3-display-right"><i class="fa fa-search fa-fw"></i></button>
		</form>
		<div style="margin-top:135px; padding-bottom:32px;">
	';
?>