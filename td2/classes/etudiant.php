<?php
require_once ('personne.php');
class Etudiant extends Personne{
    private $notes = [];

function addNote(float $note) {
$this-> notes[] = $note ;
}
function afficheNotes() {
    foreach($this->notes as $note){
        echo $note;
    }
}




}

?>