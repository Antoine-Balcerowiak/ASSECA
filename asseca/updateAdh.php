
<?php
require_once('inc/manager-db.php');





require_once("inc/connect-db.php");

//on récupère et on vérifie que l'id figure dans l'URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $adh = getAdh($id);
} else {
    // Redirect if id is not provided
    header('location: adherent.php');
    exit(); // Add exit() to stop the execution of the script
}
?>

<form action="update.php" method="get">
    <fieldset>
        <legend><i>Utilisateur</i></legend>
        Nom :
        <input type="text" name="nom" required value="<?php echo $adh->nom; ?>" /> <br />
        Prénom :
        <input type="text" name="prenom" required value="<?php echo $adh->prenom; ?>" /> <br />
        login :
        <input type="text" name="login" value="<?php echo $adh->login; ?>"/> <br />
        password :
        <input type="text" name="password" value="<?php echo $adh->password; ?>"/> <br />
        role :
        <input type="hidden" name="id" value="<?php echo $adh->id ?>" />
    </fieldset>
    <input type="submit" value="mettre à jour" />
    <input type="reset" value="Effacer" />
</form>
