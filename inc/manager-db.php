<?php
require_once 'connect-db.php';


// Récuperer tout les adherents
function getAllAdherent(){
    global $pdo;
    $query = 'SELECT * FROM adherent ';
    try {
    $result = $pdo->query($query)->fetchAll(PDO::FETCH_OBJ);
    return $result;
    }
    catch ( Exception $e ) {
    die ("erreur dans la requete ".$e->getMessage());
    }
}


?>