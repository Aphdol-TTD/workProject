<?php
    include('connexion.php');
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $sql_delet = $bddPDO->prepare ("DELETE FROM produit WHERE id=?");
        $sql_delet->execute(array( $id));
        if($sql_delet){
            //echo " Suppression du produit éffectué";
            header("location:affichage.php");
          }
    }
    
?>
