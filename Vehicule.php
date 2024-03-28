
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



?>