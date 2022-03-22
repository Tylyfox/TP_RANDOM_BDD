<?php require("../Models/DBManager.class.php");


$stagiaires = DBManager::afficherStagiaire();
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="./style.css">
  <title>Hello, world!</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid fs-4">
      <a class="navbar-brand" href="./index.php">CRUD</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <form action="../Controllers/execute.afficher.php" method="POST">
              <input type="submit" class="btn btn-dark fs-4" id="submit" name="submit" value="Afficher" />
            </form>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./ajouterStagiaire.html">Ajouter</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./mettreAJourStagiaire.php">Mettre à jour</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./supprimerStagiaire.php">Supprimer</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="d-flex p-2 bd-highlight align-items-center flex-column fond">
    
      <form class="form" action="../Controllers/execute.supprimer.php" method="post">
        <div class="mb-3">
          <div><label class="fs-3 fw-bold ">Supprimer un stagiaire</label></div>
          <select name="nom" class="fs-4 form-select">
            <?php for ($i = 0; $i < sizeof($stagiaires); $i++) { ?>
              <option value="<?php echo $stagiaires[$i]['nom'] ?>"> <?php echo $stagiaires[$i]['nom'] ?> </option>
            <?php } ?>
          </select>
          <input type="submit" class="btn btn-primary fs-5" id="submit" name="submit" value="Suppression" />
        </div>

      </form>
    
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>