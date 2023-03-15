<?php
class Salle {

private string $num;
private string $libelle ;
private string $etage ;


function __construct(string $num = '', string $libelle ='', string $etage='') {

$this->num = $num;
$this->libelle = $libelle;
$this->etage = $etage;
}

function getNum(): string {
return $this->num;
}
function getLibelle(): string {
return $this->libelle;
}
function getEtage(): string {
return $this->etage;
}
function setNum(string $num) {
$this->num = $num;
}
function setLibelle(string $libelle) {
$this->libelle = $libelle;
}
function setEtage(string $etage) {
$this->etage = $etage;
}
}
?>