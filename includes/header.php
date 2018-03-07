<?php
	echo '
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="css/w3.css">
		<link rel="stylesheet" href="css/w3-theme-light-blue.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="icon" type="image/png" href="img/favicon.png"/>
	</head>
	<body class="w3-light-grey w3-theme-indigo">
		<!-- Navigation Bar -->
		<div class="w3-top w3-bar w3-border-bottom w3-small w3-hide-small w3-hide-medium w3-theme-dark">
			<a href="index.php" class="w3-bar-item"><img src="img/logo.png" style="max-height:60px;" /></a>
			<div class="w3-display-right">';
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
		<div class="w3-bar w3-top w3-border-bottom w3-small w3-hide-large w3-theme-dark">
			<a href="index.php" class="w3-bar-item w3-left"><img src="img/logo.png" style="max-height:60px;" /></a>';
		if($_SESSION['logged_in'] == false) {
			echo '
			<div class="w3-display-right">
				<a href="signin.php" class="w3-button w3-hover-none w3-hover-text-orange"><i class="fa fa-user"></i></a>
				<a href="signup.php" class="w3-button w3-hover-none w3-hover-text-orange"><i class="fa fa-user-plus"></i></a>
			</div>';
		}
		echo '
		</div>';
		if($_SESSION['logged_in'] == true) {
			echo '
		<!-- Sidebar -->
		<div class="w3-sidebar w3-theme-dark w3-hide-large w3-bar-block w3-animate-right w3-large" style="top:0; position:fixed; display:none;z-index:5;right:0;" id="menuSidebar">
			<button class="w3-bar-item w3-button w3-right-align" onclick="w3_close()">&times;</button>
			<a href="profile.php" class="w3-bar-item w3-button w3-right-align">My Account <i class="fa fa-user"></i></a>
			<a href="addbook.php" class="w3-bar-item w3-button w3-right-align">Add Book <i class="fa fa-plus"></i></a>
			<a href="booklist.php" class="w3-bar-item w3-button w3-right-align">My Booklists <i class="fa fa-book"></i></a>
			<a href="logout.php" class="w3-bar-item w3-button w3-right-align">Logout <i class="fa fa-sign-out"></i></a>
		</div>
		<div class="w3-hide-large w3-overlay w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="menuOverlay"></div>
		<div style="top:0; position:fixed; z-index:3;right:0;" class="w3-hide-large w3-theme-dark">
			<button class="w3-button w3-large w3-right w3-theme-dark" onclick="w3_open()">&#9776;</button>
		</div>
		<script>
			function w3_open() {
				document.getElementById("menuSidebar").style.display = "block";
				document.getElementById("menuOverlay").style.display = "block";
			}
			function w3_close() {
				document.getElementById("menuSidebar").style.display = "none";
				document.getElementById("menuOverlay").style.display = "none";
			}
		</script>';
	};
	echo '
		<div style="margin-top:140px; padding-bottom:32px;">
';
?>