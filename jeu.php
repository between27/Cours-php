<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
       <?php
$aDeviner = 5;

if (isset($_GET['chiffre'])) { // Si le chiffre est défini
    $chiffre = $_GET['chiffre']; // On récupère le chiffre
    if ($chiffre < $aDeviner) { // Si le chiffre est plus petit que le nombre à deviner
        echo 'Le nombre à deviner est plus grand';
    } elseif ($chiffre > $aDeviner) { // Si le chiffre est plus grand que le nombre à deviner
        echo 'Le nombre à deviner est plus petit';
    } else { // Sinon, c'est que le chiffre est égal au nombre à deviner
        echo 'Bravo, vous avez deviné le nombre !';
    }
}
        ?> 
<form action="jeu.php" method ="GET">
    <input type="number" name="chiffre" value ="<?=htmlentities($chiffre)?>">
    <input type="text" name="demo" value="test">
    <input type="submit" value="EnvoyerInput">
    <button type="submit">DevinerButton</button>
</form>
</body>
</html>
