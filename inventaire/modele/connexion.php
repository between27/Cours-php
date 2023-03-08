<?php
class Connexion {
    private $db;

function __construct() {
$db_config['SGBD'] = 'mysql';
$db_config['HOST'] = 'devbdd.iutmetz.univ-lorraine.fr';
$db_config['DB_NAME'] = 'mamanib1u';
$db_config['USER'] = 'mamaneib1u_appli';
$db_config['PASSWORD'] = '32031496';
try {
$db = new PDO($db_config['SGBD'].':host='.$db_config['HOST'].';dbname='.$db_config['DB_NAME'], $db_config['USER'], $db_config['PASSWORD'],
array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    }    
catch (Exception $exception) {
die($exception->getMessage());
}
}
function execSQL(string $req, array $valeurs=[]): array{
    try {
        $sql = $this->db->prepare($req);
        $sql->execute($valeurs);
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    catch (Exception $exception) {
        die($exception->getMessage());
        $sql = [];
    }
}
}

?>