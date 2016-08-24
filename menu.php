<nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <div class="main-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="index.php">
                                        <i class="ion-ios-home"></i>
                                        Accueil
                                    </a>
                            </li>
                           
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">D&eacute;couvrir PADME<span class="caret"></span></a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="presentation.php">Qui sommes nous?</a></li>
                                        <li><a href="systemegouv.php">Syst&egrave;me de Gouvernance</a></li>
                                        <li><a href="reseaupad.php">Notre R&eacute;seaux</a></li>
                                        <li><a href="404.html">Statistiques</a></li>
                                        <li><a href="contact.php">Contactez-nous</a></li>
                                    </ul>
                                </div>
                            </li>
                            
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Nos Produits & Services<span class="caret"></span></a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="service.php">Nos micro-cr&eacute;dits</a></li>
                                        <li><a href="fairecredit.php">Octroyer un cr&eacute;dit</a></li>
                                        <li><a href="systemegarantie.php">Syst&egrave;me de garantie</a></li>
                                        <li><a href="fairecredit.php">Nos services</a></li>
                                        <li><a href="fairecredit">Nos comptes</a></li>
                                    </ul>
                                </div>
                            </li>
                            
                            
                            
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Client&egrave;le<span class="caret"></span></a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="presentation.php">Pourquoi choisir PADME?</a></li>
                                        <li><a href="fairecredit.php">Comment devenir client?</a></li>
                                        <li><a href="agences.php">Nos Agences</a></li>
                                        <li><a href="contact.php">Contactez-nous</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Emploi<span class="caret"></span></a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="blog-fullwidth.html">Nos r&ocirc;les</a></li>
                                        <li><a href="rh.php">Nos Ressources Humaines</a></li>
                                        <li><a href="offres.php">Nos offres</a></li>
                                        
                                        <?php if (isset($_SESSION['user']) && !empty($_SESSION['user']))
                                        
                                        {
                                        	$user=$_SESSION['user'];
                                        	$aff="<li><a href='candidature.php'>Candidature spontan&eacute;e</a></li>";
                                        	echo $aff;
                                        }else {
                                        	 
                                        	$aff="<li><a href='verifyuser.php'>Candidature spontan&eacute;e</a></li>";
                                        	echo $aff;
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </li>
                            
                            <?php if (isset($_SESSION['user']) && !empty($_SESSION['user']))
		                           	{
		                           		$user=$_SESSION['user'];
		                           		$aff="<li class='dropdown'>
		                           		<a href='#' class='dropdown-toggle' data-toggle='dropdown'>$user<span class='caret'></span></a>
		                           		<div class='dropdown-menu'>
		                           		<ul>
		                           		<!--<li><a href='#'>Profil</a></li>-->
		                           		<li><a href='deconnexion.php'>Deconnexion</a></li>
		                           		</ul>
		                           		</div>
		                           		</li>";
		                           		echo $aff;
		                           	}else {
		                           		
		                           		$aff="";
		                           		echo $aff;
		                           	}
		                           	?> 
                            
                        </ul>
                    </div>
                </nav>
                <!-- /main nav -->
            
