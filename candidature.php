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
                            <h2>Candidature Spontan&eacute;e</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.php">
                                        <i class="ion-ios-home"></i>
                                        Accueil
                                    </a>
                                </li>
                                <li class="active">Candidature Spontan&eacute;e</li>
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
        				<h2>Int&eacute;grer la PADME c'est :</h2>
        				<ul>
        					<li><i class=" icon-ok"></i> Choisir de mettre vos comp&eacute;tences aux services des micro-entrepreneurs, cr&eacute;ateurs de micro-entreprises exclus du march&eacute; du travail et du syst&egrave;me bancaire.</li>
        					<li><i class=" icon-ok"></i> Travailler dans un environnement qui encourage l'initiative</li>
        					<li><i class=" icon-ok"></i> Donner du sens &agrave; votre metier en faisant preuve d'engagement et d'ouverture.</li>
        				</ul>
        				<p><strong>Compl&eacute;ter ce formulaire pour nous rejoindre </strong></p>
        			</div>
        		</div>
        	</div>
        </section>
        
       
        
        
        <section class="company-description">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset1" data-wow-delay=".3s" >
					   <form class="form-horizontal" style="margin-left:5%;" method="post" action="controlleurs/creat_candidature.php" enctype="multipart/form-data">
						  <div class="control-group">
						    <label class="control-label" for="inputEmail">Civilit&eacute;*</label>
						    <div class="controls">
						     <p> <select class="span5 form-control" name="civilite" >
						      	<option>Mr</option>
						      	<option>Mme</option>
						      </select></p>
						    </div>
						  </div>
						  <div class="control-group">
						    <label class="control-label" for="inputPassword">Nom*</label>
						    <div class="controls">
						     <p> <input name="nom" type="text" id="inputPassword" placeholder="Nom" class="form-control"></p>
						    </div>
						  </div>
						  <div class="control-group">
						    <label class="control-label" for="inputPassword">Pr&eacute;nom*</label>
						    <div class="controls">
						     <p> <input name="prenom" type="text" id="inputPassword" placeholder="Pr&eacute;nom" class="form-control"></p>
						    </div>
						  </div>
						  <div class="control-group">
						    <label class="control-label" for="inputPassword">Email*</label>
						    <div class="controls">
						      <p><input name="mail" type="email" id="inputPassword" placeholder="Email" class="form-control"></p>
						    </div>
						  </div>
						  <div class="control-group">
						    <label class="control-label" for="inputPassword">T&eacute;l&eacute;phone*</label>
						    <div class="controls">
						      <p><input name="contact" type="text" id="inputPassword" placeholder="T&eacute;l&eacute;phone" class="form-control"></p>
						    </div>
						  </div>
						   <div class="control-group">
						    <label class="control-label" for="inputPassword">Date de naissance*</label>
						    <div class="controls">
						      <p><input name="agedate" type="date" id="inputPassword" placeholder="jj/mm/aaaa" class="form-control"></p>
						    </div>
						  </div>
						  <div class="control-group">
						    <label class="control-label" for="inputPassword">Disponibilit&eacute;</label>
						    <div class="controls">
						     <p> <input name="disponibilite" type="text" id="inputPassword" placeholder="Disponibilit&eacute;" class="form-control"></p>
						    </div>
						  </div>
						  <div class="control-group">
						    <label class="control-label" for="inputEmail">Dernier diplome sur le CV*</label>
						    <div class="controls">
						     <p> <select class="form-control" name="diplome">
						      	<option>BAC</option>
						      	<option>BTS</option>
						      	<option>BAC+3</option>
						      	<option>BAC+5</option>
						      </select></p>
						    </div>
						  </div>
						  <div class="control-group">
						    <label class="control-label" for="inputEmail">Domaine/Filiere*</label>
						    <div class="controls">
						    <p>  <select class="form-control" name="filiere">
						      	<option>Marketing</option>
						      	<option>Banque</option>
						      	<option>Informatique</option>
						      	<option>Comptabilit&eacute;</option>
						      	<option>Droit</option>
						      	<option>Informatique</option>
						      	<option>Marketing</option>
						      	<option>Banque</option>
						      	<option>Informatique</option>
						      </select></p>
						    </div>
						  </div>
						  
						  <?php if (isset($_SESSION['user']) && !empty($_SESSION['user'])){
						  
						  		if (isset($_GET['titre']) && !empty($_GET['titre'])){
						  			$titre=$_GET['titre'];
						  			$aff="
						  			<div class='control-group'>
						  			<label class='control-label' for='inputEmail'>Poste*</label>
						  			<div class='controls'>
						  			<select class='form-control' name='poste'>
						  			<option>$titre</option>
						  			</select>
						  			</div>
						  			</div>
						  			";
						  			echo $aff;
						  		}else{
						  			$titre="";
						  			$aff="
						  			<div class='control-group'>
						  			<label class='control-label' for='inputEmail'>Poste*</label>
						  			<div class='controls'>
						  			<select class='form-control' name='poste'>
						  			<option>Adminstrateur R&eacute;seaux</option>
						  			<option>Charg&eacute; Communication</option>
						  			<option>Charg&eacute; pret</option>
						  			</select>
						  			</div>
						  			</div>
						  			";
						  			echo $aff;
						  		}
						  		
						  }else{
						  
						  	
						  }?>
						  
						  
						  
						  <div class="control-group">
						    <label class="control-label" for="inputPassword">Exp&eacute;rience professionelle stage*</label>
						    <div class="controls">
						      <input name="experience1" type="number" id="inputPassword" placeholder="Nombre de mois" class="form-control">
						    </div>
						   </div> 
						    <div class="control-group">
						    <label class="control-label" for="inputPassword">Exp&eacute;rience professionelle en emploi*</label>
						    <div class="controls">
						     <p> <input name="experience2" type="number" id="inputPassword" placeholder="Nombre de mois" class="form-control"></p>
						    </div>
						   </div>
						  <div class="control-group">
						    <label class="control-label" for="inputEmail">Langue Nationale parl&eacute;e*</label>
						    <div class="controls">
						     <p> <select class="form-control" name="langue">
						      	<option>Fon</option>
						      	<option>Dendi</option>
						      	<option>Yoruba</option>
						      </select></p>
						    </div>
						  </div>
						  
						  <div class="control-group">
						    <label class="control-label" for="inputPassword">CV (pdf, docx 300ko)</label>
						    <div class="controls">
						      <p> <input type="file" name="cv" class=""></p>
						    </div>
						  </div>
						  <div class="control-group">
						    <label class="control-label" for="inputPassword">Lettre de motivation manuscrite (pdf)</label>
						    <div class="controls">
						     <p> <input type="file" name="lettre" class=""></p>
						    </div>
						  </div>
						  
						  <div class="control-group">
						    <label class="control-label" for="inputPassword">Votre Message</label>
						    <div class="controls">
						      <p><textarea name="message" rows="5" cols="10" class="form-control"></textarea></p>
						    </div>
						  </div>
						  <div class="control-group">
						    <div class="controls">
						     <p> <button name="valider" type="submit" class="btn btn-success">Envoyer</button></p>
						    </div>
						  </div>
						</form>
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