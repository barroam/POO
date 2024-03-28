<?php

interface Ireperable {
    public function réparer();
  
}

class Vehicule  implements Ireperable{
    private $matricule;
    private $vitesse;
    public function  __construct($matricule,$vitesse) { 
        $this->matricule = $matricule;
        $this->vitesse=$vitesse;
    }

//accesseur et mutateur matricule
public function setmatricule ($matricule){
    $this->matricule=$matricule;
}
public function getmatricule(){
    return  $this->matricule;
}
//accesseur et mutateur matricule
public function setVitesse($vitesse){
    $this->vitesse=$vitesse;
}
public function getVitesse(){
    return $this->vitesse;
}
      public function demarrer(){
        echo"brm brrmmm bbrrrrmmmmmm";
      }
      public function réparer(){
        echo"Véhicule réparer";
      }

}

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
class moto extends Vehicule {
    public $electrique;
    public function __construct($electrique,$vitesse,$matricule)
   {
    parent::__construct($vitesse,$matricule);
    $this->electrique=$electrique;
   }
   public function getElectrique(){
    return $this->electrique;
   }
      public function setElectrique($electrique){
$this->electrique=$electrique;
   }
   public function afficheMoto(){
echo " un nouveau".$this->getElectrique()."a un vitesse". $this->getVitesse()."et est matriculé sous le numéro".$this->getmatricule() ."<br>";
   }

}

 $voiture1 = new  Voiture("lumiere","par heure",'525','Renauld','Clio ' ,'2020');

 $voiture1 ->afficheVoiture(); //appel de la méthode afficheV
 $voiture1->Klaxonne();
$moto1=new moto("moto electrique","789643 ","10km/heure");
$moto1->afficheMoto();

?>