<?php
class Equipement{
private string $id;
private string $libelle;
private string $commentaire;

function __construct(string $id = '', string $libelle ='', string $commentaire='') {
    $this->id = $id;
    $this->libelle = $libelle;
    $this->commentaire = $commentaire;
}

function getId() : string {
    return $this->id;
}

function getLibelle() : string {
    return $this->libelle;
}

function getCommentaire() : string {
    return $this->commentaire;
}

function setId(string $id) : void {
    $this->id = $id;
}

function setLibelle(string $libelle) : void {
    $this->libelle = $libelle;
}

function setCommentaire(string $commentaire) : void {
    $this->commentaire = $commentaire;
}

}


?>