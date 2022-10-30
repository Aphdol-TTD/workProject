<?php
 require_once  'Produit.php';
class livre extends Produit {
  public $auteur;
  public $editeur;

  public function __construct(Produit $produit , String $auteur , String $editeur){
    $this->auteur=$auteur;
    $this->editeur=$editeur;

    parent::__construct($produit->get_nom(),$produit->get_prixAchat(),$produit->get_prixVente());
    
  }
  public function get_auteur(){
    return $this->auteur;
  }
  public function get_editeur(){
    return $this->editeur;
  }

     
}
/*$Produit = new Produit("pomme", 200, 500);
$Produit->afficherDescription();
$Produit->editerDescription();
$Livre = new Livre ("pomme", "rrr","eee");
echo $Livre->editerDescription();*/



