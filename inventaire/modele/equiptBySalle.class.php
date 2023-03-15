<?php
require_once ('modele/Equipement.class.php');

class EquiptbySalle {
private $num;
private $equipement;
private $qte;

function __construct(string $num = '', Equipement $equipement = null, int $qte = 0) {
$this->num = $num;
$this->equipement = $equipement;
$this->qte = $qte;
}

function getNum() : string { return $this->num; }
function getEquipement() : Equipement { return $this->equipement; }
function getQte() : int { return $this->qte; }
function setNum(string $num) : void { $this->num = $num; }
function setEquipement(Equipement $equipement) : void { $this->equipement = $equipement; }
function setQte(int $qte) : void { $this->qte = $qte; }



}
?>