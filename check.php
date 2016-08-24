<?php
session_start();
include 'modeles/all_query.php';

	if (isset($_SESSION['user']) && !empty($_SESSION['user'])){
		
		if (isset($_GET['titre']) && !empty($_GET['titre']))$titre=$_GET['titre'];else $titre="";
		header("location: candidature.php?titre=$titre");
		
	}else{
		
		header("location: verifyuser.php");
	}