   <?php

require 'auth.php';




if(isset($_POST['logout'])){
	unset($_SESSION['username']);
	header("Location: login.php");
	exit();
}

?> 

<?php include('header.php');?>
       
	<!-- header
   ================================================== -->
	<header id="main-header">
   	<div class="row">

			<div class="logo">
			<a href="index.php">CERN</a>
			</div>
        
			<nav id="nav-wrap">         
	         <a class="mobile-btn" href="#nav-wrap" title="Show navigation">
	         <span class="menu-icon">Menu</span>
	         </a>
         	 <a class="mobile-btn" href="#" title="Hide navigation">
			 <span class="menu-icon">Menu</span>
         	 </a>            

				<ul id="nav" class="nav">
				
	            <li><a class="smoothscroll" href="#hero">Home</a></li>
		        <li class="current"><a class="smoothscroll" href="#portfolio">PROJECTS</a></li>
	            <li><a class="smoothscroll" href="#about">About</a></li>
				   <li ><a  href="index.php">Documenten</a></li>
				
      
	            <li><a  href="contact.php">Contact</a></li>
				<li><a href="inloggen.php" type="submit" name="logout" > uitlogen <i class="fa fa-sign-in"></i></a></li>
				
				</ul> <!-- end #nav -->
				</nav> <!-- end #nav-wrap -->

	      <ul class="header-social">
				
			
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
			<!-- slide ( 1 )-->
                <li>
			<div class="flex-caption">
			<h2 class=""><span style="color:yellow;"> CERN </span> is enkele jaren bezig geweest met het bouwen en testen van een deeltjesversneller die protonen,
			en later ook loodkernen, tegen elkaar moet laten botsen.</h2>
								
			<iframe src="http://free.timeanddate.com/clock/i6rq2ezs/n16/tlit/fn15/pct/ftb/tt0/tm1/th1/ta1/tb4" frameborder="0" width="354" height="36" allowTransparency="true"></iframe>
	
                
			</div>						
			</li>

			<!-- slide ( 2 )-->
			<li>						
			<div class="flex-caption">
			<h2 class=""><span  style="color:yellow;"> CERN </span> De doelstelling hierbij is om sub-atomaire deeltjes te
                                vinden (zoals het Higgs-deeltje).!</h2>
									 
			<button style='font-size:24px' href="#portfolio" > more information </button>			   
			</div>					
			</li>
                
			<!-- slide ( 3 )-->
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
 </section> <!-- end homepage hero -->

<center><?php




echo "Welcome Hr : " . $_SESSION['username'];

?> 
</center>




   <!-- ONZE LAATSTE PROJECTEN 
   ================================================== -->
  
		  <section id="portfolio">
		  <div class="row section-head">
      	  <div class="twelve columns">
          <h1><span> ONZE LAATSTE PROJECTEN : </span></h1>
	       <hr />               
	       <p>CERN is enkele jaren bezig geweest met het bouwen en testen van een deeltjesversneller die protonen,
           en later ook loodkernen, tegen elkaar moet laten botsen.
			De doelstelling hierbij is om sub-atomaire deeltjes te vinden (zoals het Higgs-deeltje).
	      </p>
	      </div>
          </div>
<!--foto1===================================-->
			<div class="row section-head">
            <div class="twelve columns">
            </div> 
			<div class="row items">
			<div class="bgrid-fourth s-bgrid-third tab-bgrid-half">
            <div class="bgrid folio-item">
            <div class="item-wrap">
	        <img src="images/portfolio/foto1.jpg" alt="foto1">
            <div class="portfolio-item-meta">
     		</div> 
            </div>
			</div> 
<!--foto2===================================-->
			<div class="bgrid folio-item">
			<div class="item-wrap">
            <img src="images/portfolio/foto2.jpg" alt="foto2">
			<div class="portfolio-item-meta">
			</div>
			</div>
			</div>
			
<!--foto3===================================-->
            <div class="bgrid folio-item">
            <div class="item-wrap">
            <img src="images/portfolio/foto8.jpg" alt="foto8">                        
            <div class="portfolio-item-meta">
			</div>
            </div>
         	</div> 
<!--foto4===================================-->
            <div class="bgrid folio-item">
            <div class="item-wrap">
			<img src="images/portfolio/foto7.jpg" alt="foto7">
            <div class="portfolio-item-meta">
			</div>
			</div> 
			</div>  
   <!-- About Section
   ================================================== -->
   <section id="about">
       
     	<div class="row section-head">
      	<div class="twelve columns">
        <h1><span>WIE ZIJN WE : </span></h1>
        <hr />     	    
	    <p>Dit is het Website van het project CERN.
		Dit Website is gemaakt door <class=""><span style="color:yellow;"> Ibrahim, Ilyas, Rick, Mart.</span> 
		In dit Website gaat u meer te weten komen over wat wij hebben gedaan.
		Wie wij zijn en komt u meer te weten over het bedrijf CERN
            </p>
        </div> 
        <!-- end section-head -->

      </div>
      <div class="row mobile-no-padding">       	
      <div class="process bgrid-half tab-bgrid-whole group">
      	<div class="bgrid">
		<h3> Ibrahim Sadour     </h3>	
		<p>/ PHP / HTML / CSS /
		</p>
		</div>

        <div class="bgrid">

        <h3> Rick Kempes </h3>

			     	<p> NETWERKEN / Aanspreekpunt
			   	</p>	

		      </div> 

		      <div class="bgrid">

			     	<h3> Ilyas Bougharda   </h3>	

			     	<p>Windows/Linux
					</p>

		      </div>

		      <div class="bgrid">

		 <h3> Mart van der Knaap </h3>

		<p> Database/mysql / C#
		</p>	

        </div>

      	</div> <!-- end process -->      	

     	</div> <!-- end row -->

        </div> <!-- end section-ads -->		         	         

        </div> <!-- end call-to-action -->	           

        </section> <!-- end about -->  


   <!-- Testimonials Section
   ================================================== -->




   
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


              
              
              
