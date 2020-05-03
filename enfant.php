<?php
class Enfant extends Person{

private  $nom;
private $prenom;

public function  __construct($nom,$prenom){
$this->nom=$nom;
$this->prenom=$prenom;
static::$count++;
}
public function Setnom($nom){
    $this->nom=$nom;
}
public function identite(){
    echo "nom:".$this->nom."\n prenom:".$this->prenom;
}


}

   
?>