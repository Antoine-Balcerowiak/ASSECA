<?php
require_once('inc/connect-db.php');

// Vérifier si le jour est égal à 1
if (date('j') >= '28' && date('j') <= '31') {
    // Sélectionner les adhérents avec la valeur "non" dans la colonne "cotisation"
    $querySelect = "SELECT * FROM adherent WHERE cotisation = 'non'";
    $stmtSelect = $pdo->query($querySelect);
    $adherentsNonPayes = $stmtSelect->fetchAll(PDO::FETCH_ASSOC);

    // Insérer les adhérents dans la table "cotinonpaye"
    $queryInsert = "INSERT INTO cotinonpaye (nom, prenom, NumRue, NomRue, Ville, tel, fixe, mail, mois, annee, cotisation)
     VALUES (:nom, :prenom, :NumRue, :NomRue, :Ville, :tel, :fixe, :mail, :mois, :annee, :cotisation)";
    $stmtInsert = $pdo->prepare($queryInsert);

    foreach ($adherentsNonPayes as $adherent) {
        $nom = $adherent['nom'];
        $prenom = $adherent['prenom'];
        $NumRue = $adherent['NumRue'];
        $NomRue = $adherent['NomRue'];
        $Ville = $adherent['Ville'];
        $tel = $adherent['tel'];
        $fixe = $adherent['fixe'];
        $mail = $adherent['mail'];
        $mois = date('n');
        $annee = date('Y');
        $cotisation = 'non';

        try {
            $stmtInsert->bindParam(':nom', $nom, PDO::PARAM_STR);
            $stmtInsert->bindParam(':prenom', $prenom, PDO::PARAM_STR);
            $stmtInsert->bindParam(':NumRue', $NumRue, PDO::PARAM_STR);
            $stmtInsert->bindParam(':NomRue', $NomRue, PDO::PARAM_STR);
            $stmtInsert->bindParam(':Ville', $Ville, PDO::PARAM_STR);
            $stmtInsert->bindParam(':tel', $tel, PDO::PARAM_STR);
            $stmtInsert->bindParam(':fixe', $fixe, PDO::PARAM_STR);
            $stmtInsert->bindParam(':mail', $mail, PDO::PARAM_STR);
            $stmtInsert->bindParam(':mois', $mois, PDO::PARAM_INT);
            $stmtInsert->bindParam(':annee', $annee, PDO::PARAM_INT);
            $stmtInsert->bindParam(':cotisation', $cotisation, PDO::PARAM_STR);
            $stmtInsert->execute();
        } catch (Exception $e) {
            die("Erreur dans la requête " . $e->getMessage());
        }
    }

    // Nouvelle valeur pour la colonne à modifier
    $nouvelleValeur = "non";

    $query = "UPDATE adherent SET cotisation = :nouvelleValeur WHERE DAY(CURRENT_DATE()) = 30";

    try {
        $prep = $pdo->prepare($query);
        $prep->bindParam(':nouvelleValeur', $nouvelleValeur, PDO::PARAM_STR);
        $prep->execute();

        header("Location: adherent.php");
    } catch (Exception $e) {
        die("Erreur dans la requête " . $e->getMessage());
    }
} else {
    // Redirection si le jour n'est pas égal à 1
    header("Location: adherent.php");
}
?>
