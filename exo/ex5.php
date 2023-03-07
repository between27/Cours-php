<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
require "function.php";

$tabEntiers = [1, 3, 5, 98, 12, 34];
$tabFruits = ['Melon', 'Pomme', 'Poire'];

afficheTab(chaineVersTab(" Ceci est une phrase avec des espaces en trop.  "));
afficheTabCles($tabEntiers);
?>    


</body>
</html>