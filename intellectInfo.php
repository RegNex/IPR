<!DOCTYPE html>
<?php
ob_start();
session_start();
require_once 'dbConfig.php';
if (!isset($_SESSION['users'])) {
		header("Location: login.php");
		exit;
}


$rows = $conn->query("select * from applications");
$row = mysqli_fetch_array($rows, MYSQLI_ASSOC);


// select logged in users detail
$res = $conn->query("SELECT * FROM applicants WHERE id=" . $_SESSION['users']);
$userRow = mysqli_fetch_array($res, MYSQLI_ASSOC);
?>
<html>
	<title>My Applications | IPR</title>
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
		<div class="w3-container w3-content" style="max-width: 100%; width:800px;margin-top:110px" align="center">
			<!-- The Grid -->
			<div class="w3-row w3-center" align="center">
				<!-- Left Column -->
				<!-- Profile -->
				
				
				<!-- Middle Column -->
				<div class="w3-col w3-center" >
					<div class="w3-card-2 w3-round w3-white">
						
                                           	<center><h2>Applications</h2></center>
			<div class="row" style="margin-top: 70px;">
				
				<div class="col-md-10 col-md-offset-1">
					<table class="table table-hover" >
						
				

						<thead>
							<tr>
								<th>No.</th>
								<th>Product Name</th>
                                                                <th>Product Category</th>
                                                                <th>Product Description</th>
                                                                <th>Status</th>
                                                                
							</tr>
						</thead>
						<tbody>
							
							<tr>
							<?php while ( $row = $rows->fetch_assoc()): ?>

								<th><?php echo $row['id'] ?></th>
								<td class="col-md-10"><?php echo $row['proname'] ?></td>
                                                                <td class="col-md-10"><?php echo $row['procategory'] ?></td>
                                                                <td class="col-md-10"><?php echo $row['prodescribe'] ?></td>
                                                                <td>Pending...</td>
                                                                
							</tr>
								<?php endwhile; ?>
						</tbody>
					</table>
				
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