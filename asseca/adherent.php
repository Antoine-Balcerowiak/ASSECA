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
    <li><a href="Cotipaspaye.php">adherent qui on pas payer</a></li>
    <li><a href="refreshcoti.php">refresh</a></li>
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
          <th>login</th>
          <th>password</th>
          <th>Fonction</th>
          <th>Cotisation</th>
          <th>Cotisation payé ?</th>
          <th>update</th>
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
    <td><?php echo $adherent->login; ?></td>
    <td><?php echo $adherent->password; ?></td>
    <td><?php echo $adherent->fonction; ?></td>
    <td><?php echo $adherent->cotisation; ?></td>
    <td><?php echo $adherent->paye; ?>
    <a href="updateCoti.php?id=<?php echo $adherent->id; ?>" >cliquer ici si la personne a payé</a></td>
    <td> <a href="updateAdh.php?id=<?php echo $adherent->id; ?>" >update</a></td>
</tr>
<?php endforeach; ?>

</table>
<?php