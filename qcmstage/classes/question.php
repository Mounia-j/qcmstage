<?php
require_once 'classes/database.php';

class Question
{
public $id;
public $intitule;

public $connexion;
public function __construct($bd)
{
    $this->connexion = $bd;
}

public function ajouterQuestion()
{
$query = "INSERT INTO question SET intitule:=intitule;";
$res = $this->connexion->prepare($query);

$this->intitule = htmlspecialchars(strip_tags($this->intitule));
$res->bindParam("intitule:",$this->intitule);
    if($res->execute()){
        return true;
    }else{
        return false;
    }
}
public function afficherQuestion() {
    $query = "SELECT id_question FROM question";

}



}

