<?php

class DBManager
{


    public static function ajouterStagiaire(string $nom, string $prenom, string $dateNaissance): void
    {
        //Chaine de connexion à la base de données
        $bdd = new PDO('mysql:host=localhost;dbname=tp_random_vca;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        $req = "INSERT INTO `stagiaire`(`nom`, `prenom`, `dateNaissance`) VALUES (?,?,?)";

        $stmt = $bdd->prepare($req);
        $stmt->execute([$nom, $prenom, $dateNaissance]);
    }

    public static function afficherStagiaire(): array
    {
        //Chaine de connexion à la base de données
        $bdd = new PDO('mysql:host=localhost;dbname=tp_random_vca;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));


        $req = "SELECT * FROM `stagiaire`";
        $stmt = $bdd->prepare($req);
        $stmt->execute();
        return  $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function supprimerStagiaire(string $sup): void
    {
        $bdd = new PDO('mysql:host=localhost;dbname=tp_random_vca;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        $req = "DELETE FROM `stagiaire` WHERE `nom` = :sup";
        $stmt = $bdd->prepare($req);
        $stmt->bindValue(':sup', $sup);
        $stmt->execute();
    }
    public static function misajourStagiaire(string $nomMJ, string $nom, string $prenom, string $dateNaissance): void
    {
        $bdd = new PDO('mysql:host=localhost;dbname=tp_random_vca;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        if ($nom == "") {
            $req = "UPDATE `stagiaire` SET `prenom`=?,`dateNaissance`=? WHERE `nom` = ?";
            $stmt = $bdd->prepare($req);
            $stmt->execute([$prenom, $dateNaissance, $nomMJ]);
        } else if ($nom == "" && $prenom == "") {
            $req = "UPDATE `stagiaire` SET `dateNaissance`=? WHERE `nom` = ?";
            $stmt = $bdd->prepare($req);
            $stmt->execute([$dateNaissance, $nomMJ]);
        } else if ($prenom == "" && $dateNaissance == "") {
            $req = "UPDATE `stagiaire` SET `nom`=? WHERE `nom` = ?";
            $stmt = $bdd->prepare($req);
            $stmt->execute([$nom, $nomMJ]);
        } else if ($nom == "" && $dateNaissance == "") {
            $req = "UPDATE `stagiaire` SET `prenom`=? WHERE `nom` = ?";
            $stmt = $bdd->prepare($req);
            $stmt->execute([$prenom, $nomMJ]);
        } else if ($dateNaissance == "") {
            $req = "UPDATE `stagiaire` SET `nom`=?, `prenom`=? WHERE `nom` = ?";
            $stmt = $bdd->prepare($req);
            $stmt->execute([$nom, $prenom, $nomMJ]);
        } else if ($prenom == "") {
            $req = "UPDATE `stagiaire` SET `nom`=?, `dateNaissance`=? WHERE `nom` = ?";
            $stmt = $bdd->prepare($req);
            $stmt->execute([$nom, $dateNaissance, $nomMJ]);
        } else {
            $req = "UPDATE `stagiaire` SET `nom`=?,`prenom`=?,`dateNaissance`=? WHERE `nom` = ?";
            $stmt = $bdd->prepare($req);
            $stmt->execute([$nom, $prenom, $dateNaissance, $nomMJ]);
        }
    }
}
