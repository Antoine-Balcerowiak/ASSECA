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
          <th>Code postale</th>
          <th>Nom de la ville</th>
          <th>modification</th>
        </tr>
    

    <?php foreach ($listeAdherent as $adherent ) :?>
<tr>
    <td><?php echo $adherent->id; ?></td>
    <td><?php echo $adherent->nom; ?></td>
    <td><?php echo $adherent->prenom; ?></td>
    <td><?php echo $adherent->mail; ?></td>
    <td><?php echo $adherent->NumFixe; ?></td>
    <td><?php echo $adherent->NumPortable; ?></td>
    <td><?php echo $adherent->NumeroRue; ?></td>
    <td><?php echo $adherent->NomRue; ?></td>
    <td><?php echo $adherent->CodePostale; ?></td>
    <td><?php echo $adherent->NomVille; ?></td>
    <td> <a href="formulaire_adh.php?id=<?php echo $adherent->id; ?>" >update</a></td>
</tr>
<?php endforeach; ?>

</table>