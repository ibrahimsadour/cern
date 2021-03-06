<?php include('header.php');?>
	<!-- header
   ================================================== -->
	<header id="main-header">
   	<div class="row">

			<div class="logo">
			<a href="index.php">Cern</a>
			</div>
			<nav id="nav-wrap">         
	         <a class="mobile-btn" href="#nav-wrap" title="Show navigation">
	         <span class="menu-icon">Menu</span>
	         </a>
         	 <a class="mobile-btn" href="#" title="Hide navigation">
			 <span class="menu-icon">Menu</span>
         	 </a>            

				<ul id="nav" class="nav">
	            <li><a  href="index.php">Home</a></li>
		        <li ><a  href="index.php">PROJECTS</a></li>
	            <li><a  href="index.php">About</a></li>
	            <li><a  href="contact.php">Contact</a></li>
				
				</ul> <!-- end #nav -->
				</nav> <!-- end #nav-wrap -->

	      <ul class="header-social">
				<li><a href="Regestratie.php"> Regestratie <i class="fa fa-user-plus"></i></a></li>
				<li><a href="inloggen.php"> Inloggen <i class="fa fa-sign-in"></i></a></li>
	        	<li><a href="https://home.cern/"><i class="fa fa-facebook"></i></a></li>
	        	<li><a href="https://home.cern/"><i class="fa fa-twitter"></i></a></li>
				<li><input type="text"  id="myInput" onkeyup="myFunction()" placeholder="Zoek"></li>
				</ul>   
				</div>
				</header>   <!-- end header -->


   <!-- homepage hero
   ================================================== -->
   <section id="hero">	
   	  
		<div class="row hero-content">

			<div class="twelve columns hero-container">

			   <!-- hero-slider start-->
			   <div id="hero-slider" class="flexslider">

				   <ul class="slides">

					    <!-- slide -->
						
	
						
					   <li>
						   <div class="flex-caption">
								<h2 class=""><span style="color:yellow;"> CERN </span> is enkele jaren bezig geweest met het bouwen en testen van een deeltjesversneller die protonen,
								en later ook loodkernen, tegen elkaar moet laten botsen.</h2>
								
								<button style='font-size:24px'>more information</button>						
							</div>						
					   </li>

					   <!-- slide -->
					   <li>						
							<div class="flex-caption">
								<h2 class=""><span  style="color:yellow;"> CERN </span> De doelstelling hierbij is om sub-atomaire deeltjes te
                                vinden (zoals het Higgs-deeltje).!</h2>
									 
								<button style='font-size:24px' href="#portfolio" > more information </button>			   
							</div>					
					   </li>
					   <!-- slide -->
					  <li>
						   <div class="flex-caption">
								<h2 class=""><span style="color:yellow;"> CERN </span> Deze deeltjesversneller, de zogenaamde “Large Hadron Collider (LHC)”, is op 10 september 2009 voor het
								eerst in gebruik genomen</h2>
								
							</div>						
					   </li>
				   </ul>			              

				   

			   </div> <!-- end hero-slider -->				   

	      </div> <!-- end twelve columns-->

		</div> <!-- end row -->	

			

   </section>

   <!-- end homepage hero -->
   <center><hr></center>
   
       <center><img src="images/send.png" width="300" height="300"></center>
  </div>
   
    <!-- contact
   ================================================== -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "websitedata";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO contact (name, email, Subject, message)
 VALUES ('".$_POST["name"]."','".$_POST["email"]."','".$_POST["Subject"]."','".$_POST["Message"]."')";

if ($conn->query($sql) === TRUE) {
	
    echo "<br><center><h1> ☺ uw bericht is verzonden  ☺ </h1></center><br>";
    echo "<center><h2>  over drie werkdagen krijgt u een reactie van onze .... </h2></center> <br>";
    echo "<center><a href='contact.php'>Click hier om te terug naar het contact pagina</a></center>";
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
<center><hr></center>

   
   <!-- Footer
   ================================================== -->
   <footer>
            <hr/>
			<ul class="copyright">
         	<li>&copy; Copyright 2019 Regio College </li> 
         	<li>Design by <a href="#"> Ibrahim Sadour</a>.</li>
			</ul>
			<div id="go-top">
            <a class="smoothscroll" title="Back to Top" href="#hero">Back to Top<i class="fa fa-angle-up"></i></a>
			</div>
			</div> <!-- end row -->
			</footer> <!-- end footer -->
			<div id="preloader"> 
			<div id="loader"></div>
			</div> 
   <!-- Java Script
   ================================================== --> 
   
   <script src="js/jquery-1.11.3.min.js"></script>
   <script src="js/jquery-migrate-1.2.1.min.js"></script>
   <script src="js/jquery.flexslider-min.js"></script>
   <script src="js/jquery.waypoints.min.js"></script>
   <script src="js/jquery.validate.min.js"></script>
   <script src="js/jquery.fittext.js"></script>
   <script src="js/jquery.placeholder.min.js"></script>
   <script src="js/jquery.magnific-popup.min.js"></script>  
   <script src="js/main.js"></script>
    <!-- script
================================================== -->
	<script src="js/modernizr.js"></script>
<!--============================================== -->
<?php include('footer.php');?>
