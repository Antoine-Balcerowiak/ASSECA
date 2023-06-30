<?php
require_once('formulaire_adh.php');
require_once("inc/connect-db.php");


// à faire sur chaque donnée reçue

$nom = $_GET['nom'];
$prenom = $_GET['prenom'];
$mail = $_GET['mail'];
$NumFixe = $_GET['NumFixe'];
$NumPortable = $_GET['NumPortable'];
$NumeroRue = $_GET['NumeroRue'];
$NomRue = $_GET['NomRue'];
$CodePostale = $_GET['CodePostale'];
$NomVille = $_GET['NomVille'];

// on rédige la requête SQL
$sql = "UPDATE adherent SET
nom=:nom, prenom=:prenom, mail=:mail, NumFixe=:NumFixe, NumPortable=:NumPortable, NumeroRue=:NumeroRue,NomRue=:NomRue, CodePostale=:CodePostale,NomVille=:NomVille
WHERE id=:id";
try {
//on prépare la requête avec les données reçues
$statement = $pdo->prepare($sql);
$statement->bindParam(':nom', $nom, PDO::PARAM_STR);
$statement->bindParam(':prenom', $prenom, PDO::PARAM_STR);
$statement->bindParam(':mail', $mail, PDO::PARAM_STR);
$statement->bindParam(':NumFixe', $NumFixe, PDO::PARAM_INT);
$statement->bindParam(':NumPortable', $NumPortable, PDO::PARAM_INT);
$statement->bindParam(':NumeroRue', $NumeroRue, PDO::PARAM_INT);
$statement->bindParam(':NomRue', $NomRue, PDO::PARAM_STR);
$statement->bindParam(':CodePostale', $CodePostale, PDO::PARAM_INT);
$statement->bindParam(':NomVille', $NomVille, PDO::PARAM_STR);
$statement->bindParam(':id', $id, PDO::PARAM_INT);
$statement->execute();
//On renvoie vers la liste des salaries
 header("Location:adherent.php");
}
catch(PDOException $e){
 echo 'Erreur : '.$e->getMessage();
}
?>
<br>
<a href="adherent.php" >liste</a>

