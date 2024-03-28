<?php

 class voiture {
private  $kilometrage;
private   $marque;
private $modele;
private $annee;

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
    echo "Notre voiture est de ". $this->getMarque() ."et a comme modele ".$this->getModele()." et est de ".$this->getAnnee() ."pour". $this->getKm()." kilométre";
  }
    


}
$voiture1 = new  Voiture();
$voiture1->setMarque( "Renault");
$voiture1->setModele("Clio");
$voiture1->setAnnee("2000");
$voiture1->setkm(560);
$voiture1->afficheVoiture();













?>