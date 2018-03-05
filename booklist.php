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
		




			<!-- Blog Section -->
			<div class="w3-padding-32 w3-content w3-text-grey" id="blog">
				<div class="w3-content w3-justify w3-text-grey w3-padding-16 w3-hide-large w3-hide-medium"></div>				
				<!-- Insta Photo Grid-->
				<div class="w3-row-padding w3-padding-4 w3-center" id="myinsta">
					<div class="w3-quarter">
						<a target="_blank" href="https://www.instagram.com/p/BdeuMs9HGoK7bhp7RrIHth4yQkQnd8McmO3pwY0/"><img src="https://scontent-bom1-1.cdninstagram.com/vp/b70ae88acbfd65252048b77bb6f9e7fc/5B1AC8A7/t51.2885-15/s640x640/sh0.08/e35/26153162_508119459572332_8328456708141613056_n.jpg" alt="InstaPost1" style="width:100%"></a>
					</div>
					<div class="w3-quarter">
						<a target="_blank" href="https://www.instagram.com/p/BLgTSHBjfM8kwMvmkkfciIVJTZ0IlyF3utxS-I0/"><img src="https://scontent-bom1-1.cdninstagram.com/vp/59863d79e62ff2d1cffd766816da912b/5B02C5B7/t51.2885-15/e35/14591014_1785617761696289_4336121371982561280_n.jpg" alt="InstaPost2" style="width:100%"></a>
					</div>
					<div class="w3-quarter">
						<a target="_blank" href="https://www.instagram.com/p/BVUA9m3nK0lYMs1_J6wdoqv1waWIyIRViOMGDg0/"><img src="https://scontent-bom1-1.cdninstagram.com/vp/129be3bb3d0603bfd13047d6fa8ea8ee/5B0D9BA4/t51.2885-15/e35/19227463_1389113131123994_3449607544761221120_n.jpg" alt="InstaPost3" style="width:100%"></a>
					</div>
					<div class="w3-quarter">
						<a target="_blank" href="https://www.instagram.com/p/Be4_ANGHqJJHWDHp1mbDIKcc6P0EBgnxbPkWYg0/"><img src="https://scontent-bom1-1.cdninstagram.com/vp/e186584dda6baaaebf2e00104f190c9b/5B01B0AD/t51.2885-15/e35/26871658_144027602918855_5302628136163213312_n.jpg" alt="InstaPost4" style="width:100%"></a>
					</div>
				</div>
				<div class="w3-row-padding w3-padding-4 w3-center" id="myinsta">
					<div class="w3-quarter">
						<a target="_blank" href="https://www.instagram.com/p/Bc_1EpSnvxD098N_J8cc1sBBIq3rTEM7i6jC2w0/"><img src="https://scontent-bom1-1.cdninstagram.com/vp/c1d715c255b7fec85bc512bc112c1e2f/5AFFB171/t51.2885-15/s640x640/sh0.08/e35/25011076_167480983864137_1785842337910358016_n.jpg" alt="InstaPost5" style="width:100%"></a>
					</div>
					<div class="w3-quarter">
						<a target="_blank" href="https://www.instagram.com/p/BSB6YpbDVPhSyi4NORAX3AQdBOXMZoa_OPV7CU0/"><img src="https://scontent-bom1-1.cdninstagram.com/vp/2a964a031d2dc9a1560f0d2b3c1a958a/5B1EFFE2/t51.2885-15/e35/17494344_763559263820519_1689732617777184768_n.jpg" alt="InstaPost6" style="width:100%"></a>
					</div>
					<div class="w3-quarter">
						<a target="_blank" href="https://www.instagram.com/p/BOg1GgogmTCE4kQwat1GiccpefDpidvH5hYaek0/"><img src="https://scontent-bom1-1.cdninstagram.com/vp/84115b10c7f6bc547ccab8776a862036/5B0C1E4B/t51.2885-15/e35/15624281_1918038541764473_6648027182801092608_n.jpg" alt="InstaPost7" style="width:100%"></a>
					</div>
					<div class="w3-quarter">
						<a target="_blank" href="https://www.instagram.com/p/BPZINJ7gvdo5neBtkRT19AMbo1kH5XnxObeRHQ0/"><img src="https://scontent-bom1-1.cdninstagram.com/vp/a15d3084dcfdfafba96222c685663c65/5B193A92/t51.2885-15/e35/16110535_1210001259090179_9076269763449061376_n.jpg" alt="InstaPost8" style="width:100%"></a>
					</div>
				</div>
			</div>
			<!-- End Blog Section -->
		

		

		<?php include('includes/footer.php'); ?>
	</body>
</html>