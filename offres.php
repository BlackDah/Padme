<?php session_start();include 'modeles/m_affichage.php';?>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="icon" type="image/png" href="images/favicon.png">
        <title>PADME-BENIN | Institution de Microfinance</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Template CSS Files
        ================================================== -->
        <!-- Twitter Bootstrs CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        
        <!-- Ionicons Fonts Css -->
        <link rel="stylesheet" href="css/ionicons.min.css">
        <!-- animate css -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- Hero area slider css-->
        <link rel="stylesheet" href="css/slider.css">
        <!-- owl craousel css -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/jquery.fancybox.css">
        <!-- template main css file -->
        <link rel="stylesheet" href="css/main.css">
        <!-- responsive css -->
        <link rel="stylesheet" href="css/responsive.css">
        
        <!-- Template Javascript Files
        ================================================== -->
        <!-- modernizr js -->
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <!-- jquery -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <!-- owl carouserl js -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- bootstrap js -->

        <script src="js/bootstrap.min.js"></script>
        <!-- wow js -->
        <script src="js/wow.min.js"></script>
        <!-- slider js -->
        <script src="js/slider.js"></script>
        <script src="js/jquery.fancybox.js"></script>
        <!-- template main js -->
        <script src="js/main.js"></script>
    </head>

    <body>
        <!--
        ==================================================
        Header Section Start
        ================================================== -->
        <header id="top-bar" class="navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <!-- /responsive nav button -->
                    
                    <!-- logo -->
                    <div class="navbar-brand">
                        <a href="index.php" >
                            <img src="images/logo.png" alt="">
                        </a>
                    </div>
                    <!-- /logo -->
                </div>
                <!-- main menu -->
                <?php include 'menu.php';?>
                <!-- /main nav -->
            </div>
        </header>
		<?php
		            if(isset($_SESSION['erreur']))echo $_SESSION['erreur'];$_SESSION['erreur']="";
					if(isset($_SESSION['info']))echo $_SESSION['info'];$_SESSION['info']="";
				?>
        <!-- 
        ================================================== 
            Global Page Section Start
        ================================================== -->
        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>Listes des offres</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.php">
                                        <i class="ion-ios-home"></i>
                                        Accueil
                                    </a>
                                </li>
                                <li class="active">Offres d'emploi</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 
        
        ================================================== 
            Company Description Section Start
        ================================================== -->
        <section class="company-description">
        	<div class="container">
        		<div class="row">
        			<div class="col-md-10 offset1" data-wow-delay=".3s" >
        				<h2>Int&eacute;grer le PADME c'est :</h2>
        				<ul>
        					<li><i class=" icon-ok"></i> Rejoindre une association reconnue d'utilit&eacute; publique d'envergure nationale</li>
        					<li><i class=" icon-ok"></i> Travailler dans un environnement qui encourage l'initiative</li>
        					<li><i class=" icon-ok"></i> Donner du sens &agrave; votre metier en faisant preuve d'engagement et d'ouverture.</li>
        					<li><i class=" icon-ok"></i> Contribuer au d&eacute;velloppement de la micro finance  .</li>
        					<li><i class=" icon-ok"></i> Contribuer au d&eacute;velloppement de la microfinance couronn&eacute;e par le prix Nobel de la Paix .</li>
        				</ul>
        				<p>Chaque poste &agrave; pourvoir &agrave; le PADME donne lieu &agrave; la r&eacute;alisation d'entretien aupr&egrave;s du Services Recrutement et Gestion des carri&egrave;re, puis le cas &eacute;ch&eacute;ant , en compagnie des responsaable op&eacute;rationnels</p>
        				<p>En l'absence de contact de notre part dans les huits semaines suivants le d&eacute;p&ocirc;t de votre candidature, merci de consid&eacute;rer que d'autres candidats nous ont paru r&eacute;pondre plus pr&eacute;cisement aux caract&eacute;ristiques des postes disponibles.
        			</div>
        		</div>
        	</div>
        </section>
        
        
        
        
        <section class="company-description">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset1" data-wow-delay=".3s" >
                       <?php Padme::ListerOffres();?>
                    </div>
                </div>
            </div>
        </section>


        <!-- 
        ================================================== 
            Company Feature Section Start
        ================================================== -->
        

        <!-- 
        ================================================== 
            R&eacute;seaux padme
        ================================================== -->
       
        
        <!--
        ==================================================
        Clients Section Start
        ================================================== -->
        
        
        <!--
        ==================================================
        Call To Action Section Start
        ================================================== -->
        <!-- footer newsletter -->               
            <?php include 'footer.php';?> <!-- /#footer -->
         <script src="js/bootstrap-fileupload.js"></script> 
         <script src="js/bootstrap-alert.js"></script> 
    </body>
</html>