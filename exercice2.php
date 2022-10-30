<?php
    //Exercice1
        //La Classe
        /*class ville{
            private  $nom;
            private  $departement;
    
        //Getters
        public function getnom(){
            return $this->nom;
        }
        public function getdepartement(){
            return $this->departement;
        }
        //Setters
        public function setnom( $nom){
            $this->nom=$nom;
        }
        public function setdepartement( $departement){
            $this->departement=$departement;
        }
        //Méthode d'affichage
        public function affichage(){
            return"La ville de \n".$this->getnom(). "\n est dans le département de \n".$this->getdepartement();
        }
   }
        $VILLE = new ville();
        $VILLE ->setnom('Cotonou');
        $VILLE ->setdepartement('Littoral');
        echo $VILLE ->affichage();
        //echo"La ville de \n " .$VILLE->getnom(). " \n est dans le département de \n" .$VILLE->getdepartement();*/



      //Exercice2

        /*class ville{
            private  $nom;
            private  $departement;
        
        //Constructeur
            function __construct($nom,$departement){
            $this->nom= $nom;
            $this->departement= $departement;
        }
        public function getinfo() {
            $text="La ville de $this->nom est dans le département de $this->departement";
            return $text;
        }

        }
        //Affichage de la ville Cotonou  dans le département de littoral
        $VILLE = new ville("Cotonou","Littoral");
        //echo"La ville de \n "  ;
        echo $VILLE->getinfo();
        //echo "\n est dans le département de" ;
        echo $VILLE->getinfo();*/

       //Exercice3
        //Classe
        class personne{
            public  $nom;
            public  $prenom;
            public  $adresse;
        
            //Constructeur
                function __construct ($nom,$prenom,$adresse){
                $this->nom=$nom;
                $this->prenom=$prenom;
                $this->adresse=$adresse;
            }
            //Destructeur
               //function __destruct(){
                //echo"Je m'appelle {$this->nom} {$this->prenom} et j'habite à {$this->adresse} ";
              //  }

            //Getters
            function getnom(){
                return $this->nom;
            }
            function getprenom(){
                return $this->prenom;
            }
            function getadresse(){
                return $this->adresse;
            }
            public function getPersonne(){
                echo"Je me nomme {$this->nom} {$this->prenom} et j'habite à {$this->adresse}";
            }
            public function setadresse(){
                $reponse=readline("Voulez vous modifier votre adresse Oui / Non 
                Tapez o pour -->Oui 
                Tapez n pour -->Non
                Votre réponse:");
                if($reponse=="o"){
                    $newadresse=readline(" Entrez votre nouvelle adresse:\n"); 
                    echo"Je me nomme {$this->nom} {$this->prenom} et j'habite maintenant à $newadresse";
                }
                else{
                    echo"Je me nomme {$this->nom} {$this->prenom} et j'habite à {$this->adresse}";
                }
            }
        }
        $Personne= new personne ("TETEDE","Aphdol","Cotonou Rue 135");
        //$Personne->getPersonne();echo"<br>";
        $Personne->setadresse();
        //echo"<br>";

        


        
    //Exercice4
        //La Classe
        /*abstract class personne{
            private $nom;
            private $prenom;


        function __construct ($nom,$prenom){
            $this->nom=$nom;
            $this->prenom=$prenom;
        }
    
        //abstract public function setCoord();

        }

        class client extends personne{
            private $adresse;

            public function setCoord(){
                return "jsuis à {$this->adresse} ";
            }
        }

        $CLIENT=new client ("Porto");
        $CLIENT=setCoord();*/


?>