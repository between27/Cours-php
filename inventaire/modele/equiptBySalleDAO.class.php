<?php
require_once 'equiptBySalle.class.php' ;
require_once 'connexion.php' ;


class EquiptbySalleDAO {
    private $bd;
    private $select;

    function __construct() {
        $this->bd = new Connexion;
        $this->select = 'SELECT num_salle, id_equipt, qte FROM CONTIENT';

    }

    function insert (EquiptbySalle $equiptbySalle) : void {
        $this->bd->execSQL("INSERT INTO CONTIENT (num_salle, id_equipt, qte)
        VALUES (:num, :id, :qte)"
        ,[':num'=>$equiptbySalle->getNum(), ':id'=>$equiptbySalle->getId()
        ,':qte'=>$equiptbySalle->getQte() ] );
    }

    function deleteByNumSalle (string $nunmSalle) : void {
        $this->bd->execSQL("DELETE FROM CONTIENT WHERE num_salle = :num", [':num'=>$numSalle]);
    }

    function deleteByIdEquipt (string $id) : void {
        $this->bd->execSQL("DELETE FROM CONTIENT WHERE id_equipt = :id", [':id'=>$id]);
    }

    function update (EquiptbySalle $equiptbySalle){
        $this->bd->execSQL("UPDATE CONTIENT set qte = :qte where num_salle =:num and id_equipt =:id"
        ,[':num'=>$equiptbySalle->getNum(), ':id' => $equiptbySalle->getId(), ':qte' => $equiptbySalle -> getQte()]);
    }

    function loadQuery (array $result) : array {
        $equipementDAO = new EquipementDAO;
        $lesEquiptbySalle = [];
        foreach($result as $row) {
            $equipement = $equipementDAO->getById($row['id_equipt']);
            $lesEquiptbySalle[] = new EquiptbySalle($row['num_salle'], $equipement, $row['qte']);
           }
            return $lesEquiptbySalle;
        }

    function getAll () : array {
        return ($this->loadQuery($this->bd->execSQL($this->select)));
    }

    function getByNumSalle (string $numSalle) : array {
        return ($this-> loadQuery($this->bd->execSQL($this->select ." WHERE num_salle=:num", [':num'=>$numSalle])));
    }

    function getByNumSalleByIdEquipt (string $numSalle, string $id) : EquiptbySalle {
        return ($this-> loadQuery($this->bd->execSQL($this->select ." AND num_salle=:num and id_equipt=:id", [':num'=>$numSalle, ':id'=>$id])))[0];
    }



}


?>