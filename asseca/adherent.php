<!DOCTYPE html>
<html>
<head>
    <?php 
        require_once('inc/manager-db.php');
        $listeAdherent = getAllAdherent();
    ?>
    <title>Liste Adherents</title>
    <link rel="stylesheet" type="text/css" href="css/adherent.css">
    <li><a href="Cotipaspaye.php">adherent qui on pas payer</a></li>
    <li><a href="index.php">retour à la page précédente</a></li>
    <li><a href="refreshcoti.php">refresh a faire en fin de mois</a></li>
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
    <td><?php echo $adherent->cotisation; ?>
    <a href="updateCoti.php?id=<?php echo $adherent->id; ?>" > ( cliquer ici si la personne a payé ) </a></td>
</tr>
<?php endforeach; ?>

</table>