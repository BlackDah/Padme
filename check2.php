<?php
session_start();
include 'modeles/all_query.php';

	if (isset($_SESSION['user']) && !empty($_SESSION['user'])){
		
		header("location: candidature.php");
		
	}else{
		
		header("location: verifyuser.php");
	}