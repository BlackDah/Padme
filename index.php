<?php session_start(); include 'modeles/m_affichage.php';?>
<!DOCTYPE html>
<html class="no-js">
    <!-- head -->
    <?php include 'head.php';?>
        <body>
        <!--
        ==================================================
        Header Section Start
        ================================================== -->
       
        <header id="top-bar" class="navbar-fixed-top animated-header">
            
            <div class="container">
                <!-- logo et responsive -->
                <?php include 'logo.php';?>
                <!-- main menu -->
                <?php include 'menu.php';?>
            	
            	
            	    
            </div>
        </header>
        
        <!--
        ==================================================
        Slider Section Start
        ================================================== -->
        <!--/#main-slider-->
      <div id="myCarousel" class="carousel slide">
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                  <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
	                  <div class="item active">
	                    <img src="images/slider1.jpg" alt="" class="slider_img_size" style="height:600px;">                 
	              	  </div>
	              	  <div class="item">
	                    <img src="images/slider3.jpg" alt="" class="slider_img_size" style="height:600px;">                  
	              	  </div>
	              	  <div class="item">
	                    <img src="images/slider2.jpg" alt="" class="slider_img_size" style="height:600px;">                  
	              	  </div>
              	  </div>
              
              <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
 			  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
      </div>
            <!--
            ==================================================
            Slider Section Start
            ================================================== -->
            <!-- mot du président -->
            <?php include_once 'motpr.php';?>
             <!-- /#about -->
            
            <!-- actualite-->
            <?php include_once 'actualite.php';?>
             <!-- /#actualité -->
             
             <!-- footer newsletter -->               
            <?php include 'footer.php';?>
            <!--
            ==================================================
            Call To Action Section Start newsletter
            ================================================== -->
             <!-- /#footer -->
              
               <script src="bootstrap/jquery.js"></script>
               <script src="bootstrap/bootstrap-carousel.js"></script> 
		   	   <script >$('.carousel').carousel({
					interval: 3000	
				})</script>	  
        </body>
    </html>
