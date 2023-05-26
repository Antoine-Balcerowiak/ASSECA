<!DOCTYPE html>
<html>
<head>
    <?php 
        include 'header.php'; 
        require_once('inc/manager-db.php');
        $listeAdherent = getAllAdherent();
    ?>
    <title>Liste Adherents</title>
    <link rel="stylesheet" type="text/css" href="css/adherent.css">
</head>

    <h1>Liste des Adhérents</h1>
    <table class="table">
        <tr>
          <th>id</th>
          <th>Nom</th>
          <th>Prénom</th>
          <th>Ville</th>
          <th>Adresse</th>
          <th>Mail</th>
          <th>tel</th>
          <th>Fonction</th>
          <th>Cotisation</th>
        </tr>
    

    <?php foreach ($listeAdherent as $adherent ) :?>
<tr>
    <td><?php echo $adherent->id; ?></td>
    <td><?php echo $adherent->nom; ?></td>
    <td><?php echo $adherent->prenom; ?></td>
    <td><?php echo $adherent->ville; ?></td>
    <td><?php echo $adherent->adresse; ?></td>
    <td><?php echo $adherent->mail; ?></td>
    <td><?php echo $adherent->tel; ?></td>
    <td><?php echo $adherent->fonction; ?></td>
    <td><?php echo $adherent->cotisation; ?></td>
</tr>
<?php endforeach; ?>

</table>
<?php