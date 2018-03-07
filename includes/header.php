<?php
	echo '
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/w3.css">
		<link rel="stylesheet" href="css/w3-theme-light-blue.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="icon" type="image/png" href="favicon.png"/>
	</head>

	<body class="w3-light-grey w3-theme-indigo">
		<!-- Navigation Bar -->
		<div class="w3-top w3-bar w3-border-bottom w3-medium w3-hide-small w3-hide-medium w3-theme-dark">
			<a href="index.php" class="w3-bar-item"><img src="logo.png" style="max-height:60px;" /></a>
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
		<div style="margin-top:140px; padding-bottom:32px;">
';
?>