<?php
require_once('Vehicule.php');

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
echo " un moto ".$this->getElectrique()." a un vitesse". $this->getVitesse()."et est matriculé sous le numéro".$this->getmatricule() ."<br>";
   }

}
$moto1=new Moto(" elctrique","546461"," 10km/heure ");
$moto1->afficheMoto();
?>