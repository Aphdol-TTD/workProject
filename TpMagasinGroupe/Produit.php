<?php

require_once 'Livre.php';
class Produit{
    public $nom;
    public $prixAchat;
    public $prixVente;
    public $nbExStock = 0;
    public $description = "Pas de description";
    public function __construct($nom,$prixAchat,$prixVente){
        $this->nom = $nom;
        $this->prixAchat = $prixAchat;
        $this->prixVente = $prixVente;        
    }
    public function set_description($description){
        $this->description = $description;
    }
    function get_nom(){
        return $this->nom ;
    }
    function get_prixAchat(){
        return $this->prixAchat ;
    }
    function get_prixVente(){
        return $this->prixVente;
    }
    function get_description(){
        return  $this->description;
    }
    function get_nbExStock(){
        return $this->nbExStock ;
    }

    public function augmenterNbStock($nb){
        $this->nbExStock += $nb;
    }
    public function diminunierNbStock($nb){
        if ($this->nbExStock<$nb ){
            return false;
        }else{
            $this->nbExStock -= $nb;
            return true;
        }
        
       
    }
    public function afficherDescription(){
         echo "Le produit :  {$this->nom} se decrit comme suit {$this->description}  " ;
    }
    public  function editerDescription(){
        $reponse = readline('Voulez vous editez le description de votre produit oui(o) / non(n) : ');
        if($reponse=="o"){
            $newDescription = readline('Veuilez entrer la nouvelle description du produit: ');
            $this->description = $newDescription;
            echo "Produit : 
            Nom :{$this->nom}
            Prix d'Achat : {$this->prixAchat}
            Prix de Vente : {$this->prixVente} 
            Description :  {$this->description} 
            NbExStock : {$this->nbExStock} " ;
        }else{
            echo "Produit : 
              Nom :{$this->nom}
              Prix d'Achat : {$this->prixAchat}
              Prix de Vente : {$this->prixVente} 
              Description : {$this->description} 
              NbExStock : {$this->nbExStock}
              
              " ;
              
        }
        
    }

    
}

