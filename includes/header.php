<?php
	echo '
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="css/w3.css">
		<link rel="stylesheet" href="css/w3-theme-light-blue.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="icon" type="image/png" href="img/favicon.png"/>
	</head>
	<body class="w3-light-grey w3-theme-indigo">
		<!-- Navigation Bar Only Large Device -->
		<div class="w3-top w3-bar w3-border-bottom w3-small w3-hide-small w3-hide-medium w3-theme-dark">
			<a href="index.php" class="w3-bar-item"><img src="img/logo.png" style="max-height:60px;" /></a>
			<div class="w3-display-right">';
		if($_SESSION['logged_in'] == false) {
			echo '
				<a href="signin.php" class="w3-button w3-hover-none w3-hover-text-orange"><i class="fa fa-user fa-fw"></i> Sign in</a>
				<a href="signup.php" class="w3-button w3-hover-none w3-hover-text-orange"><i class="fa fa-user-plus fa-fw"></i> Sign up</a>';
		}
		else {
			echo '
				<a href="profile.php" class="w3-button w3-hover-none w3-hover-text-orange"><i class="fa fa-user fa-fw"></i> My Account</a>
				<a href="addbook.php" class="w3-button w3-hover-none w3-hover-text-orange"><i class="fa fa-plus fa-fw"></i> Add Book</a>
				<a href="borrow.php" class="w3-button w3-hover-none w3-hover-text-orange"><i class="fa fa-hand-paper-o fa-fw"></i> Borrow Book</a>
				<a href="booklist.php" class="w3-button w3-hover-none w3-hover-text-orange"><i class="fa fa-book fa-fw"></i> My Booklists</a>
				<a href="logout.php" class="w3-button w3-hover-none w3-hover-text-orange"><i class="fa fa-sign-out fa-fw"></i> Logout</a>';
		}
		echo '
			</div>
		</div>
		<div class="w3-bar w3-top w3-border-bottom w3-small w3-hide-large w3-theme-dark">
			<a href="index.php" class="w3-bar-item w3-left"><img src="img/logo.png" style="max-height:60px;" /></a>
		</div>';
		echo '
		<!-- Sidebar Not For Large Device -->
		<div class="w3-sidebar w3-theme-dark w3-hide-large w3-bar-block w3-animate-right w3-medium" style="top:0; position:fixed; display:none;z-index:5;right:0;" id="menuSidebar">
			<button class="w3-bar-item w3-button w3-right-align" onclick="w3_close()" style="height:76px;">&times;</button>';
		if($_SESSION['logged_in'] == true) {
			echo '
			<a href="profile.php" class="w3-bar-item w3-button w3-left-align"><i class="fa fa-user fa-fw"></i>&nbsp;&nbsp;My Account</a>
			<a href="addbook.php" class="w3-bar-item w3-button w3-left-align"><i class="fa fa-plus fa-fw"></i>&nbsp;&nbsp;Add Book</a>
			<a href="borrow.php" class="w3-bar-item w3-button w3-left-align"><i class="fa fa-hand-paper-o fa-fw"></i>&nbsp;&nbsp;Borrow Book</a>
			<a href="booklist.php" class="w3-bar-item w3-button w3-left-align"><i class="fa fa-book fa-fw"></i>&nbsp;&nbsp;My Booklists</a>
			<a href="logout.php" class="w3-bar-item w3-button w3-left-align"><i class="fa fa-sign-out fa-fw"></i>&nbsp;&nbsp;Logout</a>';
		}
		else {
			echo '
			<a href="signin.php" class="w3-bar-item w3-button w3-left-align"><i class="fa fa-user fa-fw"></i>&nbsp;&nbsp;Sign In</a>
			<a href="signup.php" class="w3-bar-item w3-button w3-left-align"><i class="fa fa-user-plus fa-fw"></i>&nbsp;&nbsp;Sign Up</a>';
		}
		echo '
		</div>
		<div class="w3-hide-large w3-overlay w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="menuOverlay"></div>
		<div style="top:0; position:fixed; z-index:3;right:0; height:59px;" class="w3-hide-large w3-theme-dark">
			<button class="w3-button w3-medium w3-right w3-theme-dark" style="height:76px;" onclick="w3_open()">&#9776;</button>
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
	echo '
		<div style="margin-top:140px; padding-bottom:32px;">
';
?>