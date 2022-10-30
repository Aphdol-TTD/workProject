<?php

include_once 'Produit.php';
include_once 'Magasin.php';

$Magasin = new Magasin(); 



echo"===========================BIENVENU DANS NOTRE MAGASIN========================\n";
$Continuer = true;
while($Continuer){
    $Continuer = true;
   
   

echo"                           Que voulez vous faire?                                \n";
echo('
Taper 1 pour ajouter 
Taper 2 pour acheter 
Taper 3 pour vendre
Taper 4 pour editer
Taper 5 pour bilan
');

$choix = readline('Faites votre choix : ');

switch ($choix){
    case 1 :
        



       echo('
        Taper 1 pour ajouter livre
        Taper 2 pour ajouter cd
        Taper 3 pour ajouter  produit standard
        
        ');
        $cod = readline('Faites votre choix : ');
        
        switch ($cod){
        case 1 :
            $nom = readline('Veuilez entrer le nom du livre : '); 
            $prixAchat =  readline('Veuilez entrer le prix achat du livre : ');
            $prixVente =  readline('Veuilez entrer le prix de vente du livre : ');
            $auteurs =  readline('Veuilez entrer l\'auteur du livre : ');
            $editeur =  readline('Veuilez entrer l\'edition du livre : ');
            $Magasin->ajouterLivre($nom,$prixAchat,$prixVente, $auteurs,$editeur);
            print_r($Magasin->stockProduit);
            break ;
        case 2 :
            
            $nom = readline('Veuilez entrer le nom du cd : '); 
            $prixAchat =  readline('Veuilez entrer le prix achat du cd : ');
            $prixVente =  readline('Veuilez entrer le prix de vente du cd : ');
            $auteurs =  readline('Veuilez entrer l\'auteur du cd : ');
            $inteprete =  readline('Veuilez entrer l\'interprete du cd : ');
            $titres =  readline('Veuilez entrer le titre du cd : ');
            $Magasin->ajouterCd($nom,$prixAchat,$prixVente, $auteurs,$editeur,$titres);
            print_r($Magasin->stockProduit);
            break ;
        case 3 :
           
            
                $nom = readline('Veuilez entrer le nom du produit : '); 
                $prixAchat =  readline('Veuilez entrer le prix achat du produit : ');
                $prixVente =  readline('Veuilez entrer le prix de vente du produit : ');
                $Magasin->ajouterProduit($nom,$prixAchat,$prixVente);
              
           
            print_r($Magasin->stockProduit);
            
            break ;
        default:
        echo 'mauvais choix';
        break ;
    }
     break;
    case 2 :
        $reference = readline('Veuilez entrer la reference de votre produit : ');
        $nombreExemplaire = readline('Veuillez entrer le nombre que vous desirez : ');
        $Magasin->acheterProduit( $reference, $nombreExemplaire);
        echo " le nouveau solde du magasin est " . $Magasin->get_solde( ) .PHP_EOL;
        print_r($Magasin->stockProduit);
     break ;
    case 3 :
       

        $reference = readline('Quelle est la reference du produit que vous voulez vendre : ');
        $nombreExemplaire = readline('Combien d exemplaire voulez vous vendre : ');
        $Magasin->vendreProduit($reference, $nombreExemplaire);
        echo " le nouveau solde du magasin est " . $Magasin->get_solde( ) .PHP_EOL;
        print_r($Magasin->stockProduit);
        break;
    case 4 :
        $reference = readline('Quelle est la reference du produit que vous voulez editer : ');
        $Produit=$Magasin->stockProduit[$reference];
        $Produit->editerDescription();
        print_r($Magasin->stockProduit);
     break ;
    case 5:
        $Magasin->Bilan() .PHP_EOL;
        break ;
    default:
        echo 'mauvais choix';
        break ;
        
}
$Continuer =$Magasin->repondre_oui_non("voulez vous continuer ? : ");
}



