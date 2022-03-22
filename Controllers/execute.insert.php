<?php

require "../Models/DBManager.class.php";

$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$dateNaissance = $_POST["dateNaiss"];

DBManager::ajouterStagiaire($nom, $prenom, $dateNaissance);

header ("Location: ../Views/ajouterStagiaire.html");


?>