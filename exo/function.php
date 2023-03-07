<?php
/**
* Affiche les valeurs d'un tableau sous forme HTML
*
* @params : array $tableau
* @return : pas de valeur retournée
*/
function afficheTab(array $tableau): void {
    echo "<table><tr>";
    foreach($tableau as $case){
        echo "<td>$case</td>";
    }
    echo "</tr></table>";
    echo "<br/>";
}


function chaineVersTab(string $text): array{
return explode(' ',trim($text));
}

function afficheTabCles (array $tab) : void{
    echo "<table><tr>";
    foreach (array_keys($tab) as $cles){
    echo "<td>$cles</td>";
    }
    echo "</tr><tr>";
    foreach ($tab as $valeur) {
        echo "<td>$valeur</td>";
    }
    echo "</tr></table>";
}

function afficheTab2 (array $tableau) : void{
    echo "<table>";
    foreach ($tableau as $tab2) {
    echo "<tr>";
    foreach ($tab2 as $valeur ){
    echo "<td>$valeur</td>";
    }
    echo "</tr>";
    }
    echo "</table>";
    }
?>