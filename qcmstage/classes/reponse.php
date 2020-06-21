<?php
require_once 'classes/database.php';

class Reponse
{
public $intitule;
public $explication;
public $appreciations;

public function ajouterReponse(){
    $query = "INSERT INTO reponse SET intitule:=intitule;";
$res = $this->connexion->prepare($query);

$this->intitule = htmlspecialchars(strip_tags($this->intitule));
$res->bindParam("intitule:",$this->intitule);
    if($res->execute()){
        return true;
    }else{
        return false;
    }
}


}


