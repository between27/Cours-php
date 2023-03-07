<?php

class Personne {
private string $nom;
private string $prenom;
private string $sexe;
private int $age;

function __construct (string $nom, string $prenom, string $sexe,int $age){
    $this -> nom = strtoupper($nom);
    $this -> prenom = $prenom;
    $this -> sexe = $sexe;
    $this -> age = $age;
}

function getNom(): string{
return $this -> nom;
}

function getPrenom(): string{
return $this -> prenom;
}

function getAge(): int{
return $this -> nom;
}
function getSexe () : string{
    return $this -> sexe;
}
function setNom (string $valeur){
    $this-> nom = strtoupper($valeur);
}
function setPrenom(string $valeur){
    $this-> prenom = $valeur;
}
function setSexe(string $valeur){
    $this-> sexe = $valeur;
}
function setAge(int $valeur){
    $this-> age = $valeur;
}

function __toString() : string {
    $chaine = $this->nom .' ' .$this->prenom .', ' .$this->age .' an';
    if ($this->age > 1) { $chaine .= 's'; }
    $chaine .= ', ';
    switch ($this->sexe) {
        case 'F' : $chaine .= 'femme'; break;
        case 'H' : $chaine .= 'homme'; break;
        default : $chaine .= 'sexe inconnu'; break;
    }
    return $chaine;


}


}


?>