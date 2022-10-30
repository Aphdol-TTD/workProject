<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification</title>
    <link rel="stylesheet" href="produit.css">
</head>
<?php
    include('connexion.php');
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $sql_update = $bddPDO->query("SELECT * FROM produit WHERE id=$id");
        $update=$sql_update->fetch();
    }
?>
<body>
    <h1> <strong> <em> <mark> Modification du produit </mark></em></strong>  </h1>

    <form method="POST" action="">
        <fieldset id="section" >
            <legend>
                Enregistrement Produit
            </legend>
            <h1>Remplissez les champs</h1>
            <input type="text" name="intitule" value="<?php echo $update["intitule"]; ?>" id="#" placeholder="Intitulé" required="required"><br>
            <input type="number" min="0" name="pA" value="<?php echo $update["pA"]; ?>"  id="#" placeholder="Prix d'achat" required="required"><br>
            <input type="number" min="0" name="pV" value="<?php echo $update["pV"]; ?>"  id="#" placeholder="Prix de vente" required="required"><br>
            <input type="number" min="0" name="qte" value="<?php echo $update["qte"]; ?>"  id="#" placeholder="Quantité" required="required">
        </fieldset>
        <input type="submit" name="modifier" value="Modifier">
       
    </form>
    </body>
</html>
    <?php
    if(isset($_POST['modifier'])){
        $intitule=$_POST['intitule'];
        $pA=$_POST['pA'];
        $pV=$_POST['pV'];
        $qte=$_POST['qte'];

        $sql_update=$bddPDO->prepare("UPDATE produit SET intitule=? , pA=? , pV=? , qte=?  WHERE id=$id");
        $sql_update->execute(array($intitule,$pA,$pV,$qte));
        if($sql_update){
            header("location:affichage.php");
          }

    }
?>