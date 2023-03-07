<?php

require_once ("classes/personne.php");
require_once("classes/etudiant.php");
$pers1 = new Personne("grand","Pierre","H",20);
$pers2 = new Personne("petit","Georgette","F",18);
$pers3 = new Personne("dupont","Dominique","qs",19);

echo "$pers1 <br/>";
echo "$pers2 <br/>";
echo "$pers3 <br/>";

$etud = [];
$etud[] = new etudiant('Skywalker','Luke','H',20);
$etud[] = new etudiant('Morgana','Leia','F',20);
foreach ($etud as $unEtud) {
echo $unEtud .'<br/>';
}
echo '<br/>';
$etud[0]->addNote(10);
$etud[0]->addNote(15);
$etud[1]->addNote(98);

$etud[0] -> afficheNotes() . "<br/>";
?>
