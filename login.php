<?php
/*
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/
ob_start();
session_start();
include_once 'dbConfig.php';
// if session is set direct to index
if (isset($_SESSION['users'])) {
header("Location: index.php");
exit;
}
if (null !== (filter_input(INPUT_POST, 'btn-login'))) {
$email = filter_input(INPUT_POST, 'email');
$upass = filter_input(INPUT_POST, 'pass');
$password = hash('sha256', $upass); // password hashing using SHA256
$stmt = $conn->prepare("SELECT id,pic,full_name,email,password,contact,address,work FROM applicants WHERE email= ?");
$stmt->bind_param("s", $email);
/* execute query */
$stmt->execute();
//get result
$res = $stmt->get_result();
$stmt->close();
$row = mysqli_fetch_array($res, MYSQLI_ASSOC);
$count = $res->num_rows;
if ($count == 1 && $row['password'] == $password) {
$_SESSION['users'] = $row['id'];
$_SESSION['uemail']= $row['email'];
$_SESSION['uname']= $row['full_name'];
$_SESSION['upic']= $row['pic'];
header("Location: index.php");
} elseif ($count == 1) {
$errMSG = "Bad password";
} else{ $errMSG = "User not found";
}
}
?>
<!DOCTYPE html>
<html>
	<title>Login | IPR</title>
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
							<h4 class="w3-center">Login</h4>
							<p class="w3-center"><img src="img/avatar3.png" class="w3-circle" style="height:80px;width:80px" alt="Avatar"></p>
							<hr>
							
							
							<form method="post" enctype="multipart/form-data" autocomplete="off">
								
								
								<div class="w3-row w3-section">
									<div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
									<div class="w3-rest">
										<input class="w3-input w3-border" name="email" type="email" placeholder="example@domain.com">
									</div>
								</div>
								
								<div class="w3-row w3-section">
									<div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-lock"></i></div>
									<div class="w3-rest">
										<input class="w3-input w3-border" name="pass" type="password" placeholder="*********">
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
								
								<div class="w3-container w3-border-top w3-padding w3-white">
									<input class="w3-check w3-margin-top w3-left-align" type="checkbox" checked="checked"> Remember <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
                                                                        <span class="w3-right w3-padding w3-hide-small">Forgot <a href="forgot-pass.php">password?</a></span>
								</div>
								
								<button type="submit" class="w3-button w3-block w3-section w3-blue w3-ripple w3-padding" name="btn-login">Login</button>
								
								<input class="w3-button w3-block w3-section w3-green w3-ripple w3-padding" type="button" onclick="location.href='register.php';" value="Don't have an Account" />
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