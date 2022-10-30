<?php
    include("connexion.php");
    /*var_dump($bddPDO);
    var_dump($_POST);
    echo '<br><br>';
    if(isset($_POST)){
        $intitule=$_POST['intitule'];
        $pA=$_POST['pA'];
        $pV=$_POST['pV'];
        $qte=$_POST['qte'];

        if(!empty($intitule) && !empty($pA) && !empty($pV) && !empty($qte)){
            $requete=$bddPDO->prepare("INSERT INTO produit (intitule,pA,pV,qte) VALUES (:intitule,:pA,:pV,:qte)" );
            
            $requete->bindValue(":intitule",$intitule);
            $requete->bindValue(":pA",$pA);
            $requete->bindValue(":pV",$pV);
            $requete->bindValue(":qte",$qte);

            $result=$requete->execute();

            if($result){
                echo "Félicitation! L'enregistrement s'est deroulé avec succès";
              }else{
                echo "Un probleme est survenu lors de l'enregistrement";
              }

            if(!$result){
                echo "Un probleme est survenu lors de l'enregistrement";
              }else{
                echo "<script type=\"text/javascript\">alert ('Félicitation! 
                L'enregistrement s'est deroulé avec succès. Votre identifiant est:".$bddPDO->lastInsertId()."')</script>
                
                ";
              }

        }
        else{
            echo"Tous les champs sont requis !";
        }

    }*/
    if(isset($_POST["Enregistrer"]))
    {
        $intitule=$_POST['intitule'];
        $pA=$_POST['pA'];
        $pV=$_POST['pV'];
        $qte=$_POST['qte'];

        if(!empty($intitule) AND !empty($pA) AND !empty($pV) && !empty($qte)){
            if(strlen($intitule)){
                  //echo" Le nom du produit doit contenir au moins 2 caractères";
            //}else{
              $requete=$bddPDO->prepare("INSERT INTO produit (intitule,pA,pV,qte) VALUES (?,?,?,?)" );
              $requete->execute(array($intitule,$pA,$pV,$qte));

              if($requete){
                header("location:affichage.php");
              }
            }

        }else{
            echo"Veuillez remplir tous les champs svp";
        }
    }
?>