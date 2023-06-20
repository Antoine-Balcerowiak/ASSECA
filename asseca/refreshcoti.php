<?php
require_once('inc/connect-db.php');

// Nouvelle valeur pour la colonne à modifier
$nouvelleValeur = "non";

$query = "UPDATE adherent SET paye = :nouvelleValeur WHERE DAY(CURRENT_DATE()) = 1";

try {
    $prep = $pdo->prepare($query);
    $prep->bindParam(':nouvelleValeur', $nouvelleValeur, PDO::PARAM_STR);
    $prep->execute();
    
    header("Location: adherent.php");
} catch (Exception $e) {
    die("Erreur dans la requête " . $e->getMessage());
}
?>
