<?php 
require_once('Vehicule.php');

class voiture extends Vehicule{
    private $kilometrage;
    private $marque;
    private $modele;
    private $annee;
    public function __construct($vitesse,$matricule,$kilometrage,$marque,$modele,$annee )
    {
        parent::__construct($vitesse,$matricule);
        $this->kilometrage=$kilometrage;
        $this->marque=$marque;
        $this->modele =$modele ;
        $this-> annee=$annee;
    }
    
    //accesseur et mutateur de kilométrage
    public function setkm ($kilometrage){
        $this->kilometrage=$kilometrage;
    }
    public function getKm() {
        return $this->kilometrage;
    }
    
    //accesseur et mutateur marque
    public function setMarque ($marque){
        $this->marque=$marque;
    }

    public function getMarque(){
        return  $this->marque;
    }
    
    //accesseur et mutateur modele
    public function setModele($modele){
        $this->modele =$modele ;
    }

    public function getModele(){
        return  $this->modele;
    }
    
    //accesseur et mutateur année
    public function setAnnee ($annee){
        $this-> annee=$annee;
    }

    public function getAnnee(){
        return  $this->annee;
    }
      
        
      public function afficheVoiture(){
        echo parent::demarrer()." <br> Notre voiture est de ". $this->getMarque() ." et a comme modele ".$this->getModele()." et est de ".$this->getAnnee() ." pour ". $this->getKm()." kilométre ". $this->getVitesse() ." waoh ". $this->getmatricule() ;
      }
       
      public function Klaxonne(){
        echo"<br> pin piinnnn, attention";
      }
    
     }

 $voiture1 = new  Voiture("lumiere","par heure",'525','Renauld','Clio ' ,'2020');

 $voiture1 ->afficheVoiture(); 







?>