<?php

require "../Models/DBManager.class.php";

$stagiaires = DBManager::afficherStagiaire();

session_start();    
 $_SESSION['stagiaires'] = $stagiaires;   
 header("Location: ../Views/afficherStagiaire.php");

 ?>
