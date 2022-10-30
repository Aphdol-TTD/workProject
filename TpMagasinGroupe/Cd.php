<?php

class Cd extends Produit {
  public $auteur;
  public $interprete;
  public $titres;


  public function __construct(Produit $produit, String $auteur , String $interprete , String $titres){
    $this->auteur=$auteur;
    $this->interprete=$interprete;
    $this->titres=$titres;
    parent::__construct($produit->get_nom(),$produit->get_prixAchat(),$produit->get_prixVente());
  }

  public function get_auteur(){
    return $this->auteur;
  }
  public function get_inteprete(){
    return $this->inteprete;
  }
  public function get_titres(){
    return $this->titres;
  }
}
