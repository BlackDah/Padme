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
                <!-- main menu -->
               
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
                            <h2>Service</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.php">
                                        <i class="ion-ios-home"></i>
                                        Accueil
                                    </a>
                                </li>
                                <li class="active">Service</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>   
        </section><!--/#Page header-->


        <!-- 
        ================================================== 
            Service Page Section  Start
        ================================================== -->
        <section id="service-page" class="pages service-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2 class="subtitle wow fadeInUp animated" data-wow-delay=".3s" data-wow-duration="500ms">Que faisons nous?</h2>
                            <p class="subtitle-des wow fadeInUp animated" data-wow-delay=".5s" data-wow-duration="500ms">Le PADME offre &agrave; sa client&egrave;le constitu&eacute;e par les micro-entreprises b&eacute;ninoises et les particuliers employ&eacute;s des entreprises publiques et priv&eacute;es des services financiers et des services non financiers.</p>
                            <div class="row service-parts">
                                <div class="col-md-6">
                                    <div class="block wow fadeInUp animated" data-wow-duration="400ms" data-wow-delay="600ms">
                                        <i class="ion-ios-paper-outline"></i>
                                        <h4>Services<br> financiers</h4>
                                        <p>L'offre de services financiers est constitu&eacute;e essentiellement par les types de prets ci-dessous pr&eacute;sent&eacute;s consentis aux personnes &agrave; faible revenu ( les particuliers ayant une source de revenu r&eacute;guli&egrave;re, les micro entrepreneurs exercant ou d&eacute;sireuse d'exercer une activit&eacute; ou les ONG de microfinance ou &agrave; volet microfinance)<br/>
    <strong>Cr&eacute;dit individuel</strong><br/></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="block wow fadeInUp animated" data-wow-duration="400ms" data-wow-delay="1s">
                                        <i class="ion-ios-paper-outline"></i>
                                        <h4>Micro Cr&eacute;dit<br>immobilier</h4>
                                        <p>Le cr&eacute;dit est destin&eacute; au financement de la construction d'une maison ou de son am&eacute;nagement.
    Le Montant maximum est 10.000.000 F francs FCFA pour une dur&eacute;e de 60 mois au maximum.
    Le taux d'int&eacute;ret appliqu&eacute; est d&eacute;gressif et s'applique sur le montant resxtant du.
    Il est fonction de la dur&eacute;e de remboursement et varie entre 1.5% et 2%.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="block wow fadeInUp animated" data-wow-duration="400ms" data-wow-delay="800ms">
                                        <i class="ion-ios-pint-outline"></i>
                                        <h4>Cr&eacute;dit de <br>caution solidaire</h4>
                                        <p>Le PADME consent des cr&eacute;dits individuels d'un montant variant de 20 000 FCFA &agrave; 10.000 000 FCFA, pour une dur&eacute;e maximale de 36 mois avec un taux d'int&eacute;ret variant entre 2% et 1,5% par mois sur l'encours de cr&eacute;dit en fonction de la dur&eacute;e de remboursement.
    Ce cr&eacute;dit est destin&eacute; au financement des activit&eacute;s g&eacute;n&eacute;ratrices de revenus et assorti obligatoirement d'une garantie r&eacute;elle (parcelle, nantissement de biens ou gages sur v&eacute;hicules) ou d'une caution sur salaire.
    Le client peut solliciter et obtenir une p&eacute;riode de grace pouvant atteindre 6 mois si son activit&eacute; l'exige <strong>Cr&eacute;dit de caution solidaire</strong></p>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="block wow fadeInUp animated" data-wow-duration="400ms" data-wow-delay="1.1s">
                                        <i class="ion-ios-paper-outline"></i>
                                        <h4>Cr&eacute;dit<br/> relais</h4>
                                        <p>Ces cr&eacute;dits permettent au PADME de refinancer les ONGs locales afin de pouvoir atteindre les micro-entrepreneurs situ&eacute;s hors de sa zone d'intervention.
    Dans le syst&egrave;me de cr&eacute;dit relais, l'ONG partenaire est consid&eacute;r&eacute;e comme un client du PADME et b&eacute;n&eacute;ficie d'un cr&eacute;dit global &agrave; un taux d'int&eacute;ret pr&eacute;f&eacute;rentiel de 1% par mois sur l'encours pour une dur&eacute;e maximale de 24 mois.
    La p&eacute;riodicit&eacute; peut etre mensuelle, bi-mensuelle, trimestrielle, semestrielle,. avec un d&eacute;lai de grace pouvant atteindre 6 mois.<br/>
    Les b&eacute;n&eacute;ficiaires finaux du cr&eacute;dit relais sont des clients de l'ONG.
    Le montant du cr&eacute;dit global d&eacute;pend du nombre de b&eacute;n&eacute;ficiaires finals du cr&eacute;dit relais.
    Le montant maximum accord&eacute; par l'ONG partenaire &agrave; chaque b&eacute;n&eacute;ficiaire final ne doit pas d&eacute;passer le montant maximum accord&eacute; par le PADME aux membres des groupes de caution solidaire, sans que le montant global mis &agrave; la disposition de l'ONG ne d&eacute;passe le plafond de 5.000.000 FCFA.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="block wow fadeInUp animated" data-wow-duration="400ms" data-wow-delay="1s">
                                        <i class="ion-ios-paper-outline"></i>
                                        <h4>Micro cr&eacute;dit <br>de promotion de <br>l'artisanat</h4>
                                        <p>On y distingue entre autres, le cr&eacute;dit de d&eacute;marrage d'activit&eacute; : ce cr&eacute;dit est destin&eacute; au financement des achats d'&eacute;quipements ou de fonds de roulement pour l'installation des jeunes artisans diplom&eacute;s sans emplois dans les diff&eacute;rents corps de m&eacute;tiers.
    Ce sont donc les jeunes diplom&eacute;s des corps de m&eacute;tier qui ne se sont pas encore install&eacute;s et qui sont en manque de moyens financiers pour le faire qui constituent la cible vis&eacute;e par ce produit.
    Une priorit&eacute; est donn&eacute;e aux jeunes femmes artisanes diplom&eacute;es sans emploi.
    Le cr&eacute;dit comporte deux types de prets : les cr&eacute;dits individuels et les cr&eacute;dits de groupe qui fonctionnent exactement comme les cr&eacute;dits de caution solidaires et les cr&eacute;dits individuels ci-dessus pr&eacute;sent&eacute;s.
    Le montant du cr&eacute;dit varie de 20.000 FCFA &agrave; 300.000 FCFA tant pour les cr&eacute;dits individuels que pour les cr&eacute;dits de groupe.
    La dur&eacute;e maximum est de 36 mois.
    Chaque emprunteur, s'il le d&eacute;sire peut solliciter un d&eacute;lai de grace allant de 1 &agrave; 6 mois.
    En dehors de ces produits qui sont fonctionnels, il y a en cours des projets de constitution de fonds de garantie pour faciliter davantage l'offre de service financiers pour certains corps de m&eacute;tiers.
    Ces fonds en projets sont :</p>
    
    <ul>
      <li> le FOGA pour les artisans de touts les corps de m&eacute;tiers et qui sont affili&eacute;s &agrave; la F&eacute;d&eacute;ration Nationale des Artisans du B&eacute;nin (FNAB), </li>
      <li> Le PEFAB destin&eacute; aux femmes intervenant dans la transformation agro alimentaire, </li>
      <li> Le Fonds de Garantie des tisserands (FG Tisserands), orient&eacute;s vers les artisans sp&eacute;cialis&eacute;s dans le m&eacute;tier de tissage.
	   </li>
    </ul>
    </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="block wow fadeInUp animated" data-wow-duration="400ms" data-wow-delay="1s">
                                        <i class="ion-ios-paper-outline"></i>
                                        <h4>Services <br>non financiers</h4>
                                        <p>Avant la mise en place des cr&eacute;dits le PADME organise deux s&eacute;ances d'information, de sensibilisation et de formation &agrave; la bonne gestion des micro entreprises. <br/>
    <br/>
    Ces s&eacute;ances permettent aux clients potentiels d'etre inform&eacute;s de mani&egrave;re g&eacute;n&eacute;rale sur le PADME et sur ses produits (conditions d'&eacute;ligibilit&eacute;, frais, garanties, etc).
    De meme les clients sont sensibilis&eacute;s sur l'importance de la tenue de la comptabilit&eacute; (notamment la tenue des cahiers d'achats, de ventes et de dettes), la s&eacute;paration de la caisse de l'entreprise de leur propre poche, le marketing et le respect des engagements envers les fournisseurs et les partenaires financiers.
    A ces s&eacute;ances s'ajoute l'appui conseil des Charg&eacute;s de prets aux b&eacute;n&eacute;ficiaires des cr&eacute;dits.
    Cela s'inscrit dans un cadre de suivi permanent qui vise &agrave; aider les clients en g&eacute;n&eacute;rale et particuli&egrave;rement ceux qui ont des difficult&acute;s sp&eacute;cifiques dans la gestion quotidienne de leurs activit&eacute;s.<br/>
    <br/>
    Ces s&eacute;ances apportent une r&eacute;ponse appr&eacute;ciable aux carences de gestion souvent responsables de la faillite des micro entreprises.
    Elles diminuent les risques d'&eacute;chec dans le secteur des micro entreprises non seulement grace &agrave; l'enseignement et aux conseils pratiques prodigu&eacute;s, mais aussi grace &agrave; l'&eacute;mulation suscit&eacute;e par le t&eacute;moignage des anciens clients.
    En somme les services non financiers du PADME gratuitement offert aux micro entrepreneurs visent &agrave; combler le d&eacute;ficit de formation et d'informations qui font d&eacute;faut aux promoteurs d'entreprise dans divers domaines d'activit&eacute;.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        

        <!-- 
        ================================================== 
            Works Section Start
        ================================================== -->
        
                <!-- 
        ================================================== 
            Clients Section Start
        ================================================== -->
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