<?php

require('../Models/DBManager.class.php');


$sup = $_POST["nom"];
DBManager::supprimerStagiaire($sup);
header("Location: ../Views/supprimerStagiaire.php");

?>