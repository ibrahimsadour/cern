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
	            <li><a  href="cp.php">Contact</a></li>
				<li><a href="Regestratie.php"> Regestratie <i class="fa fa-user-plus"></i></a></li>
				<li><a href="inloggen.php"> Inloggen <i class="fa fa-sign-in"></i></a></li>
				</ul> <!-- end #nav -->
				</nav> <!-- end #nav-wrap -->

	      <ul class="header-social">
				
	        	<li><a href="https://home.cern/"><i class="fa fa-facebook"></i></a></li>
	        	<li><a href="https://home.cern/"><i class="fa fa-twitter"></i></a></li>
				<input type="zoek" placeholder="Zoek.." name="search">
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

  
   
   
   
    <!-- contact
   ================================================== -->
		<section id="contact">
		<div class="row section-head">
   		<div class="twelve columns">
	    <h1>  <span> Neem contact met onze : </span></h1>
	    <hr />	        
		</div>
		</div>
		
		<div class="row">
      	<div id="contact-form" class="six columns tab-whole left">

     <!-- form -->
     <form   action="insert2.php"  method="POST" >
     <fieldset>
            
 	<label for="uname"><b><span style="color:yellow;"> Name </span> </b></label>
    <input type="text" placeholder="Enter your name" name="name" required>

	<label for="psw"><b><span style="color:yellow;"> Eamil </span></b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
	
    <label for="psw"><b><span style="color:yellow;"> Subject </span></b></label>
    <input type="text" placeholder="Enter Subject" name="Subject" required>
        
	<label for="psw"><b><span style="color:yellow;"> Message </span></b></label>
    <textarea type="text" placeholder="Enter Message" name="Message" required></textarea>
	
	<button value="insert" type="submit">
     <i class="fa fa-paper-plane"></i> SEND MESSAGE
    </button>
	<button type="rest" value="Reset">Rest</button>
   
	</fieldset>
	</form> 
	</div>

         <div class="six columns tab-whole right">
	     <h3 class="address">Adres : </h3>

	         <p>
            Cypressehout 99<br>
            Zaandam<br>
             1507 EK
            </p>

            <h3>Contact gegevens : </h3>
			
			
			Ibrahim Sadour     <br>
			Email: 10086169@edu.regiocollege.nl<br>
			Rick Kempes<br> 
			Email: 10087208@edu.regiocollege.nl<br>
			Ilyas Bougharda<br>
			Email: 10080612@edu.regiocollege.nl<br>

			  </p>
            
            <p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d38909.279263260425!2d4.8550473891527455!3d52.445995066782295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5fccc7914528f%3A0xee4bfbc50d83b807!2sRegional+College!5e0!3m2!1sar!2snl!4v1558372118356!5m2!1sar!2snl" width="400" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
            </p>
               	
         </div>     	

      </div>   

   </section>  

   
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
			</div> 
			</footer>
			<div id="preloader"> 
			<div id="loader"></div>
			</div> 
 <!--============================================== -->  

			
			
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
 <!--============================================== -->  
   
   
 <!-- script
================================================== -->
	<script src="js/modernizr.js"></script>
<!--============================================== -->

<?php include('footer.php');?>