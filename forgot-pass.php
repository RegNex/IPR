<?php
/*
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/
ob_start();
session_start();
?>

<!DOCTYPE html>
<html>
	<title>Reset | IPR</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
	<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
	<style>
	html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
	</style>
	<body class="w3-theme-l5">
		<!-- Page Container -->
		<div class="w3-container w3-content" style="width:400px;margin-top:80px" align="center">
			<!-- The Grid -->
			<div class="w3-row w3-center" align="center">
				<!-- Left Column -->
				<!-- Profile -->
				
				
				<!-- Middle Column -->
				<div class="w3-col w3-center" >
					<div class="w3-card-2 w3-round w3-white">
						<div class="w3-container">
							<h4 class="w3-center">Reset Password</h4>
							<p class="w3-center"><img src="img/avatar3.png" class="w3-circle" style="height:80px;width:80px" alt="Avatar"></p>
							<hr>
							
							
							<form method="post" enctype="multipart/form-data" autocomplete="off" action="send_link.php">
								<div class="w3-row w3-section">
									<div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
									<div class="w3-rest">
										<input class="w3-input w3-border" name="email" type="email" placeholder="example@domain.com">
									</div>
								</div>
								<?php
								if (isset($errMSG)) {
								?>
								<div class="w3-row w3-section">
									<div class="w3-panel w3-red w3-round-small">
										<span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
									</div>
								</div>
								<?php
								}
								?>
								
								<button type="submit" class="w3-button w3-block w3-section w3-blue w3-ripple w3-padding" name="submit_email">Reset Password</button>
								
								<input class="w3-button w3-block w3-section w3-green w3-ripple w3-padding" type="button" onclick="location.href='login.php';" value="Login" />
							</form>
							
						</div>
					</div>
					<br>
					
					<br>
					
					<script>
					// Accordion
					function myFunction(id) {
					var x = document.getElementById(id);
					if (x.className.indexOf("w3-show") == -1) {
					x.className += " w3-show";
					x.previousElementSibling.className += " w3-theme-d1";
					} else {
					x.className = x.className.replace("w3-show", "");
					x.previousElementSibling.className =
					x.previousElementSibling.className.replace(" w3-theme-d1", "");
					}
					}
					// Used to toggle the menu on smaller screens when clicking on the menu button
					function openNav() {
					var x = document.getElementById("navDemo");
					if (x.className.indexOf("w3-show") == -1) {
					x.className += " w3-show";
					} else {
					x.className = x.className.replace(" w3-show", "");
					}
					}
					</script>
				</body>
			</html>