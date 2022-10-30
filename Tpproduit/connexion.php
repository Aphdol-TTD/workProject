<?php
try {
        $bddPDO= new PDO('mysql:host=localhost;dbname=magasin','root',"");
        } catch (PDOException $e) {
        echo "Erreur connexion" . $e->getMessage() ;
        exit();
        }
?>