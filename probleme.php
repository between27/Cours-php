<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
<?php

class Delit {
    private string $code;
    private string $designation;
    private float $tarif;

    function __construct(string $code,string $designation, float $tarif){
        $this-> code = $code;
        $this-> designation = $designation;
        $this-> tarif = $tarif;
    }

    function getCode () : string{
        return $this->code;
    }
    function getDesignation() : string{
        return $this-> designation;
    }
    function getTarif(): float{
        return  $this->tarif;
    }
    function setCode(string $valeur): void{
        $this->code = $valeur;
    }
    function setDesignation(string $valeur): void{
        $this->designation = $valeur;
    }
    function setTarif(float $valeur): void{
        $this->tarif = $valeur;
    }

    function __toString(){
        $chaine = $this-> code . " - " . $this->designation . " - " . $this-> tarif . " €";
        return $chaine;
    }

}
class Vehicule {
    private string $plaque;
    private string $marque;
    private string $modele;

    function __construct(string $plaque,string $marque, string $modele){
        $this-> plaque =  $plaque;
        $this-> marque = $marque;
        $this-> modele = $modele;
    }

    function getPlaque () : string{
        return $this->plaque;
    }
    function getMarque () : string{
        return $this->marque;
    }
    function getModele () : string{
        return $this->modele;
    }
    function setPlaque(string $valeur): void{
        $this->plaque = $valeur;
    }
    function setMarque(string $valeur): void{
        $this->marque = $valeur;
    }
    function setModele(string $valeur): void{
        $this->modele = $valeur;
    }

    function __toString(){
        $chaine = $this-> plaque . " - " . $this->marque  . " ". $this-> modele;
        return $chaine;
    }   
}
class Infraction {
    private int $numero;
    private Vehicule $vehicule;
    private $delits = [];

    function __construct(int $numero, Vehicule $vehicule){
        $this->numero = $numero;
        $this->vehicule = $vehicule;
    }


    function AddDelit(Delit $delit):void{
        $this->delits[] = $delit;
    }

    function getDelits():iterable{
        return $this->$this->delits;
    }

    function getMt () : float {
        $total = 0;
        foreach ($this->delits as $delit) {
            $total += $delit->getTarif();
        }
        return $total;
    }

    function affiche(){
    echo "<table>";
        echo "<tr> <td colspan='2'>Infraction N°$this->numero</td><td>$total}</td><tr>";
        echo "<tr><td colspan='3'>$vehicule</td></tr>";
        foreach ($this->delits as $delit) {
            explode(" - ",$delit);
            echo "<tr><td>$code</td><td>$designation</td><td>$tarif</td></tr>";
        }
 
        
    echo "</table>";

    }
}
$de = new Delit("A01","Stationnement gênant", 45);
$dra = new Vehicule("EF207BG","Renault","Captur");
echo $dra;
?>


</body>
</html>

