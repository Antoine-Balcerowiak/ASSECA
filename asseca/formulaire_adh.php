
<?php
require_once('inc/manager-db.php');
require_once("inc/connect-db.php");

//on récupère et on vérifie les données reçues par le formulaire 
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $adh = getAdh($id);}

 else {
    // Redirect if id is not provided
    header('location: index.php');
    exit(); // Add exit() to stop the execution of the scripts
}
?>

<form action="update.php" method="get">
    <fieldset>
        <legend><i>Utilisateur</i></legend>
        
        Nom :
        <input type="text" name="nom" required value="<?php echo $adh->nom; ?>" > 
        Prénom :
        <input type="text" name="prenom" required value="<?php echo $adh->prenom; ?>" > 
        mail :
        <input type="text" name="mail" value="<?php echo $adh->mail; ?>"> 
        Numéro de fixe :
        <input type="number" name="NumFixe" value="<?php echo $adh->NumFixe; ?>"/> <br >
        Numéro de portable :
        <input type="number" name="NumPortable" value="<?php echo $adh->NumPortable; ?>"> 
        Numéro de rue :
        <input type="number" name="NumeroRue" value="<?php echo $adh->NumeroRue; ?>"> 
        Nom de la rue :
        <input type="text" name="NomRue" value="<?php echo $adh->NomRue; ?>"> 
        Code postale :
        <input type="number" name="CodePostale" value="<?php echo $adh->CodePostale; ?>"> 
        Nom de la ville :
        <input type="text" name="NomVille" value="<?php echo $adh->NomVille; ?>">
        
        <input type="hidden" name="id" value="<?php echo $adh->id ?>" />
    </fieldset>
    <input type="submit" value="mettre à jour" />
</form>
