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
                <?php include 'logo.php';?>
                <!-- main menu -->
                <?php include 'menu.php';?>                
                <!-- /main nav -->
            </div>
        </header>

        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>Actualit&eacute;s</h2>
                            <p>Pour garantir le remboursement des cr&eacute;dits,<br> le PADME met l'accent sur la qualit&eacute; de l'entrepreneur, la rentabilit&eacute; et la viabilit&eacute; de l'activit&eacute; pour laquelle le financement est demand&eacute;.</p>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.php">
                                        <i class="ion-ios-home"></i>
                                        Accueil
                                    </a>
                                </li>
                                <li class="active">Actualit&eacute;s</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            </section><!--/#Page header-->
            <section id="blog-full-width">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <?php Padme::ListerOneActu();?>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 
        ================================================== 
            Call To Action Section Start
        ================================================== -->
        <?php include 'footer.php';?> 
        <!-- /#footer -->
    
    </body>
</html>
