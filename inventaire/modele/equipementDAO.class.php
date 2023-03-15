<?php
include_once 'equipement.class.php';
include_once 'connexion.php';

class EquipementDAO {
private $bd;
private $select;

function __construct() {
$this->bd = new Connexion();
$this->select = 'SELECT id_equipt, lib_equipt, commentaire FROM EQUIPEMENT ';
}

function insert (Equipement $equipement) : void {
$this->bd->execSQL("INSERT INTO EQUIPEMENT (id, libelle, commentaire)
VALUES (:id, :libelle, :commentaire)"
,[':id'=>$equipement->getId(), ':libelle'=>$equipement->getLibelle()
,':commentaire'=>$equipement->getCommentaire() ] );
}

function delete (string $id) : void {
$this->bd->execSQL("DELETE FROM EQUIPEMENT WHERE id = :id", [':id'=>$id]);
}

function update (Equipement $equipement){
    $this->bd->execSQL("UPDATE EQUIPEMENT set lib_equipt = :libelle, commentaire = :commentaire where id_equipt =:id"
    ,[':id'=>$equipement->getId(), ':libelle' => $equipement->getLibelle(), ':commentaire' => $equipement -> getCommentaire()]);
}

private function loadQuery (array $result) : array {
    $equipements = [];
    foreach($result as $row) {
        $equipement = new Equipement();
       $equipement->setId($row['id_equipt']);
       $equipement->setLibelle($row['lib_equipt']);
       $equipement->setCommentaire($row['commentaire']);
       $equipements[] = $equipement;
       }
       return $equipements;
       }


function getAll () : array {
        return ($this->loadQuery($this->bd->execSQL($this->select)));
   }

function getByNum (string $id) : Equipement {
    $unEquipement = new Equipement();
    $lesEquipements = $this->loadQuery($this->bd->execSQL($this->select ." WHERE
id_equipt=:id", [':id'=>$id]) );
    if (count($lesEquipements)>0) { $unEquipement = $lesEquipements[0]; }
    // il y a un seul élément dans le tableau de equipements ➔ indice 0
    return $unEquipement;
   }

function existe (string $id) : bool {
    $req = "SELECT * FROM EQUIPEMENT WHERE id_equipt = :id";
    $res = $this->loadQuery($this->bd->execSQL($req,[':id'=>$id]));
    return (res != []);
   }

function getNonInventaire (string $numSalle) : array {
    return [];

}


}

?>