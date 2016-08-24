<?php session_start();?>
<!DOCTYPE html>
<html class="no-js">
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
                            <h2>Nos Agences</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.php">
                                        <i class="ion-ios-home"></i>
                                        Accueil
                                    </a>
                                </li>
                                <li class="active">Nos Agences</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<section id="team">
            <div class="container">
                <div class="row">
                    <h2 class="subtitle text-center">Agences PADME</h2>
                    <div class="col-md-3">
                        <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".3s">
                            <div class="team-img">
                                <img src="images/team/team-1.jpg" class="team-pic" alt="">
                            </div>
                            <h3 class="team_name">Agences Porto novo (katchi)</h3><br>
                            
                            <p class="team_text">B&acirc;timent Advans Carrefour Ste-Th&eacute;r&egrave;se 01 BP 11825 Abidjan 01<br><strong>T&eacute;l :</strong>  +225 21 26 05 68<br><strong>Mail :</strong> Contact@advanscotedivoire.com </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".5s">
                            <div class="team-img">
                                <img src="images/team/team-2.jpg" class="team-pic" alt="">
                            </div>
                          <h3 class="team_name">Agences Porto novo (katchi)</h3><br>
                            
                            <p class="team_text">B&acirc;timent Advans Carrefour Ste-Th&eacute;r&egrave;se 01 BP 11825 Abidjan 01<br><strong>T&eacute;l :</strong>  +225 21 26 05 68<br><strong>Mail :</strong> Contact@advanscotedivoire.com </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".7s">
                            <div class="team-img">
                                <img src="images/team/team-3.jpg" class="team-pic" alt="">
                            </div>
                            <h3 class="team_name">Agences Porto novo (katchi)</h3><br>
                            
                            <p class="team_text">B&acirc;timent Advans Carrefour Ste-Th&eacute;r&egrave;se 01 BP 11825 Abidjan 01<br><strong>T&eacute;l :</strong>  +225 21 26 05 68<br><strong>Mail :</strong> Contact@advanscotedivoire.com </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".9s">
                            <div class="team-img">
                                <img src="images/team/team-4.jpg" class="team-pic" alt="">
                            </div>
                            <h3 class="team_name">Agences Porto novo (katchi)</h3><br>
                            
                            <p class="team_text">B&acirc;timent Advans Carrefour Ste-Th&eacute;r&egrave;se 01 BP 11825 Abidjan 01<br><strong>T&eacute;l :</strong>  +225 21 26 05 68<br><strong>Mail :</strong> Contact@advanscotedivoire.com </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
         <section id="clients">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="subtitle text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Nos partenaires</h2>
                        <p class="subtitle-des text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, error.</p>
                        <div id="clients-logo" class="owl-carousel">
                            <div>
                                <img src="images/clients/logo-1.jpg" alt="">
                            </div>
                            <div>
                                <img src="images/clients/logo-2.jpg" alt="">
                            </div>
                            <div>
                                <img src="images/clients/logo-3.jpg" alt="">
                            </div>
                            <div>
                                <img src="images/clients/logo-4.jpg" alt="">
                            </div>
                            <div>
                                <img src="images/clients/logo-5.jpg" alt="">
                            </div>
                            <div>
                                <img src="images/clients/logo-1.jpg" alt="">
                            </div>
                            <div>
                                <img src="images/clients/logo-2.jpg" alt="">
                            </div>
                            <div>
                                <img src="images/clients/logo-3.jpg" alt="">
                            </div>
                            <div>
                                <img src="images/clients/logo-4.jpg" alt="">
                            </div>
                            <div>
                                <img src="images/clients/logo-5.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!--
        ==================================================
        Call To Action Section Start
        ================================================== -->
        <!-- footer newsletter -->               
            <?php include 'footer.php';?> <!-- /#footer -->
        
    </body>
</html>