<?php session_start();?>
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
                <!-- logo et responsive -->
                <?php include 'logo.php';?>
                <!-- main menu -->
                <?php include 'menu.php';?>
                <!-- /main nav -->
            </div>
        </header>

        <!-- 
        ================================================== 
            Global Page Section Start
        ================================================== -->
        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>Identifiez-vous </h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.php">
                                        <i class="ion-ios-home"></i>
                                        Accueil
                                    </a>
                                </li>
                                <li class="active">&agrave; propos</li>
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
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="col-md-5  wow fadeInLeft" data-wow-delay=".3s" >
                     	<div class="block" id="content_block">
                            <h3 class="subtitle wow fadeInUp" data-wow-delay=".3s" data-wow-duration="500ms" style="margin-top:2%;">Connexion</h3>
                             <form class="form" id="formulaire" method="post" action="controlleurs/creat_connexion.php">
						  <div class="control-group">
						   
						    <div class="controls">
						   <p> <input name="mail" type="email" class="form-control" placeholder="mail" class="in"></p>
						    </div>
						  </div>
						  <div class="control-group">
						   
						    <div class="controls">
						   <p> <input name="pass" type="password" class="form-control" placeholder="Mot de passe" class="in"></p>
						    </div>
						  </div>
						  <input name="id_image_a_commenter" type="hidden" value="<?php echo $_GET['id'];?>" >
						  <div class="control-group">
						    <div class="controls"><button type="submit" name="valider" class="btn btn-success">Connexion</button>
						    <p id="log"> Nouveau ? <a href="inscription.php"  class="" >Inscrivez-vous</a></p>
						    </div>
						  </div>
						</form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>


            <?php include 'footer.php';?> <!-- /#footer -->
        	 <script src="bootstrap/bootstrap-modal.js"></script> 
        	 <script src="bootstrap/jquery.js"></script>
    </body>
</html>