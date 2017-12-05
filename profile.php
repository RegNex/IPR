<!DOCTYPE html>
<?php
ob_start();
session_start();
require_once 'dbConfig.php';
if (!isset($_SESSION['users'])) {
		header("Location: login.php");
		exit;
}


$rows = $conn->query("select * from applicants where id =". $_SESSION['users']);
$row = mysqli_fetch_array($rows, MYSQLI_ASSOC);
if (null !== (filter_input(INPUT_POST, 'update'))) {

$uname = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$contact = filter_input(INPUT_POST, 'contact');
$dob = filter_input(INPUT_POST, 'dob');
$address = filter_input(INPUT_POST, 'address');
$work = filter_input(INPUT_POST, 'work');
$sql2 = "UPDATE applicants SET full_name = '$uname',email='$email',contact='$contact',dob='$dob',address='$address',work='$work' where id =". $_SESSION['users'];
$conn->query($sql2);

header('location:index.php');
}




// select logged in users detail
$res = $conn->query("SELECT * FROM applicants WHERE id=" . $_SESSION['users']);
$userRow = mysqli_fetch_array($res, MYSQLI_ASSOC);
?>
<html>
	<title>Profile | IPR</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<style>
	html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
	</style>
	<body class="w3-theme-l5">
		<!-- Navbar -->
	<div class="w3-top">
			<div class="w3-bar w3-theme-d2 w3-left-align w3-large">
				<a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
				
					
				<a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4" style="height:80px"><i class="fa fa-home w3-margin-right"></i><h3>IPRA</h3></a>
              <img class="w3-theme-d2" src="/img/site-logo.png" style="width:100px;height:80px" alt="Avatar">
				<div class="w3-dropdown-hover w3-hide-small w3-right">
					<button class="w3-button w3-padding-large" title="Account"><img src="../<?php echo $userRow['pic']; ?>" class="w3-circle" style="height:25px;width:25px" alt="Avatar"></i></button>
					<div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:30px" >
						<a href="profile.php" class="w3-bar-item w3-button" >Profile</a>
						<a href="logout.php" class="w3-bar-item w3-button">Logout</a>
					</div>
				<div class="w3-bar-item w3-hide-medium w3-right">Welcome, <?php echo $userRow['full_name']; ?></div>
                                </div>
			</div>
                                </div>
		<!-- Navbar on small screens -->
		<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
			<a href="aboutus.php" class="w3-bar-item w3-button w3-padding-large">About Us</a>
			<a href="contact.php" class="w3-bar-item w3-button w3-padding-large">Contact us</a>
			<a href="profile.php" class="w3-bar-item w3-button w3-padding-large">My Profile</a>
		</div>
		<!-- Page Container -->
		<div class="w3-container w3-content" style="max-width: 100%; width:500px;margin-top:110px" align="center">
			<!-- The Grid -->
			<div class="w3-row w3-center" align="center">
				<!-- Left Column -->
				<!-- Profile -->
				
				
				<!-- Middle Column -->
				<div class="w3-col w3-center" >
					<div class="w3-card-2 w3-round w3-white">
						<div class="w3-container">
							<h4 class="w3-center">My Profile</h4>
							<div class="w3-display-container">
									<p class="w3-center"><img id="blah" src="../<?php echo $userRow['pic']; ?>" class="w3-circle" style="height:100px;width:100px" alt="Image"></p>
									
								</div>
							<hr>
							<p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i><?php echo $userRow['full_name']; ?></p>
							<p><i class="fa fa-envelope fa-fw w3-margin-right w3-text-theme"></i><?php echo $userRow['email']; ?></p>
                                                        <p><i class="fa fa-bell fa-fw w3-margin-right w3-text-theme"></i> <?php echo $userRow['contact']; ?></p>
                                                        <p><i class="fa fa-bars fa-fw w3-margin-right w3-text-theme"></i> <?php echo $userRow['work']; ?></p>
                                                        <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> <?php echo $userRow['address']; ?></p>
							<p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> <?php echo $userRow['dob']; ?></p>
                                                        <br/>
						<button type="button" data-target="#myModal" data-toggle="modal" class="btn btn-success">Update</button>
                                               <br/>
                                                 <input class="w3-button w3-block w3-section w3-green w3-ripple w3-padding" type="button" onclick="location.href='intellectInfo.php';" value="My Applications" /> 
    <br/>
                                                
                                                	<!-- Modal -->
						<div id="myModal" class="modal fade w3-card-2 w3-round w3-white" role="dialog">
							<div class="modal-dialog">
								<!-- Modal content-->
								<div class="modal-content">
                                                                    <br/>
									<div class="modal-header">
                                                                          
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title">Update</h4>
									</div>
									<div class="modal-body">
										<form method="post">
											<div class="form-group">
                                                                                            
                                                                                            
                                                                  <div class="w3-display-container">
									<p class="w3-center"><img id="picture" src="img/avatar3.png" class="w3-circle" style="height:100px;width:100px" alt="Avatar"></p>
									<input name="image" type="file" accept="image/jpg"  onchange="readURL(this);">
								</div>
                                                                                            <br/>
                                                                                            
												
												<input class="w3-input w3-border" name="name" type="text" placeholder="Full Name">
                                                                                                <br/>
<input class="w3-input w3-border" name="email" type="text" placeholder="example@domain.com">
<br/>
<input class="w3-input w3-border" name="contact" type="tel" placeholder="+233-24xxxxxxxx">
<br/>
<input class="w3-input w3-border" name="dob" type="text" placeholder="dd-MM-YYYY">
<br/>
<input class="w3-input w3-border" name="work" type="text" placeholder="-- Work --">
<br/>
<input class="w3-input w3-border" name="address" style="height:80px" type="text" placeholder="-- Address --">
<br/>

	</div>
    <input type="submit" name="update" value="Update" class="btn btn-success w3-margin-bottom">  
    <br/>
											
										</form>
                                                                            <br/>
									</div>
								</div>
							</div>
						</div>
                                                
                                               
                                                </div>
                                            <br/>
					</div>
					<br>
				
				</div>
				<!-- End Grid -->
                                <br/>
			</div>
			
			<!-- End Page Container -->
		</div>
		<br>
                <footer class="code-container w3-theme-d4 w3-padding-large" >
                    <br/>
			<p>Developed by <a href="https://www.developerbryte.wordpress.com" target="_blank">Group 7</a></p>
		</footer>
		
		<script>
                    //display image
					function readURL(input) {
					if (input.files && input.files[0]) {
					var reader = new FileReader();
					reader.onload = function (e) {
					$('#blah')
					.attr('src', e.target.result)
					.width(100)
					.height(100);
					};
					reader.readAsDataURL(input.files[0]);
					}
					}
                                        
                                        //display image
					function readURL(input) {
					if (input.files && input.files[0]) {
					var reader = new FileReader();
					reader.onload = function (e) {
					$('#picture')
					.attr('src', e.target.result)
					.width(100)
					.height(100);
					};
					reader.readAsDataURL(input.files[0]);
					}
					}
					
                                        
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