<?php

require('../Models/DBManager.class.php');

$nomMJ = $_POST["nomMJ"];
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$dateNaissance = $_POST["dateNaiss"];

DBManager::misajourStagiaire($nomMJ,$nom,$prenom,$dateNaissance);
header("Location: ../Views/mettreAJourStagiaire.php");

?>

