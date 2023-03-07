<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
$fruits = ["Banane","Tomate","Fraise"];
$fruits[] = "Cerise";
array_unshift($fruits, "Kiwi");
$legumes = ["Courgette", "Concombre", "Haricot vert"];
$achats = ["fruits" => $fruits,"legumes" => $legumes];


foreach ($achats as $indice1 => $a){
    sort($a);
    echo "$indice1 :<br />";
    foreach ($a as $indice2 => $b){
        echo "$indice2 : $b<br />";
    }
}


    ?>
</body>
</html>