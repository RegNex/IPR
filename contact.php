<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
ob_start();
session_start();
require_once 'dbConfig.php';

// select logged in users detail
$res = $conn->query("SELECT * FROM applicants WHERE id=" . $_SESSION['users']);
$userRow = mysqli_fetch_array($res, MYSQLI_ASSOC);
?>
<html>
	<title>Contact us | IPR</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
			
		</div>
		<!-- Navbar on small screens -->
		<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
                    <a href="profile.php" class="w3-bar-item w3-button w3-padding-large">Profile</a>
                    <a href="contact.php" class="w3-bar-item w3-button w3-padding-large">Contact us</a>
			<a href="aboutus.php" class="w3-bar-item w3-button w3-padding-large">About Us</a>
			
			
		</div>
		<!-- Page Container -->
		<div class="w3-container w3-content" style="max-width:100%;margin-top:100px">
			<!-- The Grid -->
			<div class="w3-row">
				<!-- Left Column -->
				<div class="w3-col m3">
					
					<div class="w3-card-2 w3-round w3-white" style="width: 300px">
						<div class="w3-container">
							<button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-block w3-section w3-blue w3-ripple w3-padding">Apply for IPR</button>
							<div id="id01" class="w3-modal">
								<div class="w3-modal-content w3-animate-zoom w3-card-4" style="width: 500px;">
									<header class="w3-container w3-teal">
										<span onclick="document.getElementById('id01').style.display='none'"
										class="w3-button w3-display-topright">&times;</span>
										<h2>Application Form</h2>
									</header>
									<div class="w3-container">
                                                                            <form method="POST" action="action-form.php">
										<br/>
										<div class="w3-rest">
											<input class="w3-input w3-border" required name="person" type="text" placeholder="Full Name">
										</div>
										<br/>
										<div class="w3-rest">
											<input class="w3-input w3-border" required name="email" type="text" placeholder="example@domain.com">
										</div>
										<br/>
										<div class="w3-rest">
											<input class="w3-input w3-border" required name="proname" type="text" placeholder="Product Name">
										</div>
										<br/>
										<div class="w3-rest">
											<input class="w3-input w3-border" required name="procategory" type="text" placeholder="Product Category">
										</div>
										<br/>
										<div class="w3-rest">
											<input class="w3-input w3-border" required name="prodescribe" style="height:100px" type="text" placeholder="What is the Product About?">
										</div>
										<br/>
										
								
										<br/>
										<button type="submit" class="w3-button w3-block w3-section w3-teal w3-ripple w3-padding" name="submit">Submit</button>
										</form>
									</div>
								</div>
								<br/>
							</div>
							
							<input class="w3-button w3-block w3-section w3-green w3-ripple w3-padding" type="button" onclick="location.href='http://www.copyright.gov.gh/intellectual-property-ip';" value="Learn about Intellectual Property" />
							<input class="w3-button w3-block w3-section w3-green w3-ripple w3-padding" type="button" onclick="location.href='aboutus.php';" value="About Us" />
							
							<input class="w3-button w3-block w3-section w3-green w3-ripple w3-padding" type="button" onclick="location.href='contact.php';" value="Contact Us" />
							
							
						</div>
					</div>
					<br>
                                        <br/>
					
					<!-- Accordion -->
					<div class="w3-card-2 w3-round" style="width: 300px">
						<div class="w3-white">
                                                    <p style="align-content: center"><h4><strong>Useful Links</strong></h4></p>
							<button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i>Ghana Copyright Office</button>
							<div id="Demo1" class="w3-hide w3-container">
								<p><a href="http://www.copyright.gov.gh/intellectual-property-ip">Official website</a></p>
							</div>
							<button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i>Intellectual Property in Ghana</button>
							<div id="Demo2" class="w3-hide w3-container">
								<p><a href="http://www.iphandbook.org/handbook/resources/Country/Ghana/">ipHandbook of Best Practices</a></p>
							</div>
							<button onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i>Government of Ghana</button>
							<div id="Demo3" class="w3-hide w3-container">
								<p><a href="http://www.ghana.gov.gh">Government of Ghana</a></p>
							</div>
						</div>
					</div>
					
					
					
					<!-- End Left Column -->
				</div>
                                
                                
                                
                                <!-- Middle Column -->
    <div class="w3-col m7">
 
      <div class="w3-container w3-card-2 w3-white w3-round w3-margin">


 	<div class="w3-container">
            <h2>Contact us Form</h2>
            <form method="POST" action="action-send.php">
										
										<br/>
										<div class="w3-rest">
											<input class="w3-input w3-border" required name="uemail" type="text" placeholder="example@domain.com" re>
										</div>
										<br/>
										<div class="w3-rest">
                                                                                    <input class="w3-input w3-border" required name="usubject" type="text" placeholder="Subject">
                                                                                </div>
										<br/>
										<div class="w3-rest">
                                                                                    <input class="w3-input w3-border" required name="umessage" style="height:100px" type="text" placeholder="Message" >
										</div>
										<br/>
										
										<button type="submit" class="w3-button w3-block w3-section w3-teal w3-ripple w3-padding" name="submit">Submit</button>
										</form>
									</div>
	</div>
      
    <!-- End Middle Column -->
    </div>
                                
 <!-- Right Column -->
    <div class="w3-col m2">
      <div class="w3-card-2 w3-round w3-white w3-center">
        <div class="w3-container">
            <p>Upcoming Events:</p>
          <img src="/img/event.png" alt="Event" style="width:100%;">
          <p><strong>National Stakeholders’ Workshop on the Marrakesh Treaty to Facilitate Access to Published Works for Persons Who Are Blind, Visually Impaired, or Otherwise Print Disabled</strong></p>
          <p><button class="w3-button w3-block w3-theme-l4"><a href="http://www.copyright.gov.gh/upcoming-events">More Info</a></button></p>
        
          <br/>
        </div
      </div>
    </div>
      <br>
      
      <div class="w3-card-2 w3-round w3-white w3-center">
        <div class="w3-container">
          <p>Customer Satisfaction</p>
          <img src="../<?php echo $userRow['pic']; ?>" alt="Avatar" style="width:50%"><br>
          <span><?php echo $userRow['full_name']; ?></span>
           <p>Are you satisfy with our service?</p>
          <div class="w3-row w3-opacity">
            <div class="w3-half">
              <button class="w3-button w3-block w3-green w3-section" title="Yes"><i class="fa fa-check"></i></button>
            </div>
            <div class="w3-half">
              <button class="w3-button w3-block w3-red w3-section" title="No"><i class="fa fa-remove"></i></button>
            </div>
          </div>
        </div>
      </div>
      <br>
     
      
    <!-- End Right Column -->
    </div>
    
    
    
				<!-- Page Container -->
				<div class="w3-container w3-content" style="max-width: 100%; width:500px;margin-top:80px" align="center">
			
                                </div>
                        </div>
                </div>
                                <br/>
                                <br/>
		 <footer class="w3-container w3-theme-d5">
			<p>Developed by <a href="https://www.developerbryte.wordpress.com" target="_blank">Group 7</a></p>
		</footer>
				
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