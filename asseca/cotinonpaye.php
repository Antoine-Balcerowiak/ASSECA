<!DOCTYPE html>
<html>
<head>
    <?php 
        require_once('inc/manager-db.php');
        $listeAdherent = getAllCotinonpaye();
    ?>
    <title>Liste des cotisation non payer</title>
    <link rel="stylesheet" type="text/css" href="css/adherent.css">
    <li><a href="index.php">retour à la page d'acceuil</a></li>
    <li><a href="adherent.php">afficher la liste d'adhérent</a></li>
</head>

    <h1>Liste des Adhérents</h1>
    <table class="table">
        <tr>
          <th>id</th>
          <th>Nom</th>
          <th>Prénom</th>
          <th>Mail</th>
          <th>Numéro de fixe </th>
          <th>Numéro de portable</th>
          <th>Numéro de rue</th>
          <th>Nom de la rue </th>
          <th>Nom de la ville</th>
          <th>mois</th>
          <th>annee</th>
          <th>Cotisation payé ?</th>
        </tr>
    

    <?php foreach ($listeAdherent as $adherent ) :?>
<tr>
    <td><?php echo $adherent->id; ?></td>
    <td><?php echo $adherent->nom; ?></td>
    <td><?php echo $adherent->prenom; ?></td>
    <td><?php echo $adherent->mail; ?></td>
    <td><?php echo $adherent->fixe; ?></td>
    <td><?php echo $adherent->tel; ?></td>
    <td><?php echo $adherent->NumRue; ?></td>
    <td><?php echo $adherent->NomRue; ?></td>
    <td><?php echo $adherent->Ville; ?></td>
    <td><?php echo $adherent->mois; ?></td>
    <td><?php echo $adherent->annee; ?></td>
    <td><?php echo $adherent->cotisation; ?>
    <a href="delete.php?id=<?php echo $adherent->id; ?>" > ( cliquer ici si la personne a payé pour la supprimé) </a></td>
</tr>
<?php endforeach; ?>

</table>