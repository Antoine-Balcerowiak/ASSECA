<?php
require_once('inc/connect-db.php');

// On vérifie si l'id figure dans l'URL
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
}

// Nouvelle valeur pour la colonne à modifier
$nouvelleValeur = "oui";

$query = "UPDATE adherent SET paye = :nouvelleValeur WHERE id = :id;";

try {
    $prep = $pdo->prepare($query);
    $prep->bindParam(':nouvelleValeur', $nouvelleValeur, PDO::PARAM_STR);
    $prep->bindParam(':id', $id, PDO::PARAM_INT);
    $prep->execute();
    
    // Redirection vers la liste des utilisateurs
    header("Location: adherent.php");
} catch (Exception $e) {
    die("Erreur dans la requête " . $e->getMessage());
}
?>
