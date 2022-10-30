<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage</title>
    <link rel="stylesheet" href="produit.css">
</head>
<body class="body1">
<?php
include('connexion.php');
$requete="SELECT * from produit ORDER BY id ASC ";
$result=$bddPDO->query($requete);
    if(!$result){
        echo"La récupération a rencontré un problème";
    }else{
        $nombre=$result->rowCount();
    }
?>
<fieldset id="section" >
<legend align="center">Tous les produits </legend>
<h2 align="center"> Il y a <?=$nombre?> produit(s) au total</h2>
    <table border="5"align="center" width="60%" >
            <th>ID</th>
            <th>Intitulé</th>
            <th>Prix d'achat</th>
            <th>Prix de vente</th>
            <th>Quantité</th>
            <th>Action1</th>
            <th>Action2</th>

        <?php
            include("connexion.php");
            $requete=$bddPDO->query("SELECT * from produit");
            while ($aff=$requete->fetch()){
        ?>

        <tr>
            <td ><?php echo $aff['id'];  ?></td>
            <td><?php echo $aff['intitule'];  ?></td>
            <td><?php echo $aff['pA'];  ?></td>
            <td><?php echo $aff['pV'];  ?></td>
            <td><?php echo $aff['qte'];  ?></td>
            <td><a class="class1" href="supprimer.php? id=<?php echo $aff['id'];  ?>">Supprimer</a></td>
            <td><a class="class2" href="modifier.php? id=<?php echo $aff['id'];  ?>">Modifier</a></td>
        </tr>
        <?php  } ?>
    </table>
    </fieldset>
      <a href="produit.html">Ajouter un nouveau produit</a> 
</body>
</html>