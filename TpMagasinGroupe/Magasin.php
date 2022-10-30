<?php
include_once 'Menu.php';
require_once 'Produit.php';
require_once 'Livre.php';
require_once 'Cd.php';

class Magasin
{
    public $solde = 0 ;
    public  $stockProduit = array();

    function get_stockProduit(){
        return $this->stockProduit;
    }

    function get_solde(){
        return $this->solde;
    }

    public function solde(int $nombreExemplaire , float  $prixVente){
        $Produit =  $this->solde=$prixVente *$nombreExemplaire ;
    }
    
    //Fonction pour ajouter un produit

    public function ajouterProduit(String $nom , float $prixAchat ,float $prixVente)
    {
      $Produit = new Produit($nom, $prixAchat, $prixVente);
      array_push($this->stockProduit,  $Produit);
        
    }
   
    //Fonction pour ajouter un livre

    public function ajouterLivre(String $nom, float $prixAchat, float $prixVente,string $auteurs, string $editeur)
    {
        $Produit= new Livre(new Produit ($nom,$prixAchat,$prixVente),$auteurs,$editeur);
        array_push($this->stockProduit, $Produit);
    }

     //Fonction pour ajouter un cd
    public function ajouterCd(String $nom, float $prixAchat, float $prixVente,string $auteurs, string $inteprete ,string $editeur)
    {
        $Produit= new Cd(new Produit ($nom,$prixAchat,$prixVente),$auteurs,$editeur,$inteprete);
        array_push($this->stockProduit, $Produit);
    }

    public function repondre_oui_non($phrase){
        while(true){
            $reponse = readline($phrase . " -(o)oui/(n)non   ");
            if($reponse== "o"){
                return true;

            }else{
                return false;
            }
        }

    }

     //Fonction pour acheter un produit

    public function acheterProduit(int $reference, int $nombreExemplaire){
        /*$reference =(int)readline('Veuilez entrer la reference de votre produit : ');
        $nombreExemplaire = (int)readline('Veuillez entrer le nombre que vous desirez : ');*/
        /*$soldes= readline('entrez votre solde');
        if($this->solde=$Produit->get_prixAchat() *$nombreExemplaire < $soldes){*/
           
            $Produit = $this->stockProduit[$reference];
            $Produit->augmenterNbStock($nombreExemplaire);
            
           $this->solde -= ($Produit->get_prixAchat() * $nombreExemplaire);
        /*}else{
            echo 'votre solde est insuffisant';
        }*/
        
        
    
    }

    //Fonction pour vendre un produit

    public function vendreProduit(int $reference, int $nombreExemplaire){
        $Produit = $this->stockProduit[$reference];
        $Produit->diminunierNbStock($nombreExemplaire);
        $this->solde += ($Produit->get_prixVente() * $nombreExemplaire);
       
    }

    public function Bilan(){
        $total_achat = 0;
        $total_vente = 0;
        $benefices = 0;
        foreach($this->stockProduit as $Produit){
            echo "Produit : 
            Nom :{$Produit->get_nom()}
            Prix d'Achat : {$Produit->get_prixAchat()}
            Prix de Vente : {$Produit->get_prixVente()} 
            Description : {$Produit->get_description()} 
            NbExStock : {$Produit->get_nbExStock()}
            
            " ;
            
            $total_achat+= ($Produit->get_prixAchat()*$Produit->get_nbExStock());
            $total_vente+= ($Produit->get_prixVente()*$Produit->get_nbExStock());
            
        }
        
        $nbproduit= count($this->stockProduit);
        echo "Le nombre de produit dans notre magasin est ". $nbproduit .PHP_EOL;
        echo "Le montant des achats est ".$total_achat .PHP_EOL;
        echo "Le chiffre d affaire est ". $total_vente .PHP_EOL;
        $benefices = $total_vente-$total_achat;
        echo "Le benefices est ".$benefices .PHP_EOL;

        

        /*return [

            $total_achat,
            /*"Total Vente "=>$total_vente,
            "Nombre Produit"=>$total_stock,
            "Total Benefice"=>$benefice_total
        ];*/

    }

}




