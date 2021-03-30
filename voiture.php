<?php
    class Voiture{
        private $marque;
        private $couleur;
        private $immatriculations;
        
        
        public function getMarque(){
            return $this->marque;
        }
        public function setMarque($marque2){
            $this->marque =$marque2;
        }
        public function __construct($m,$c,$i){
            $this->marque=$m;
            $this->couleur=$c;
            $this->immatriculation=$i;
        }
        public function afficher(){
            echo $this->marque;
            echo $this->couleur;
            echo $this->immatriculation;
        }
        
    }


?>