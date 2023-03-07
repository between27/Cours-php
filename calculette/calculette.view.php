<!DOCTYPE html>
<head>
    <meta charset="UTF-8" />
    <title>Formulaires - calculette</title>
    <link rel="stylesheet" href="calculette.css" />
</head>
<body>
    <section>
        <h1>Calculette</h1>
        <form action = "calculette.php" method = "get">

            <p>Entrez deux entiers : </p>

            <label for="valeur1">Valeur 1 : </label>
            <input type="number" name="valeur1" placeholder="entrez un entier" value = '<?= $entier1 ?>' />
            <br /> <br />

            <label for="valeur2">Valeur 2 : </label>
            <input type="number" name="valeur2" placeholder="entrez un entier" value = '<?= $entier2 ?>' />

            <p>Faites l'opération de votre choix :</p>

            <input type = "submit" name = "add"     value = "Addition"          class="calc" />
            <input type = "submit" name = "mul"     value = "Multiplication"    class="calc" />
            <input type = "submit" name = "sous"    value = "Soustraction"      class="calc" />
            <input type = "submit" name = "divi"    value = "Division"          class="calc" />
            <input type = "submit" name = "vider"   value = "Vider"             class="calc" />

        </form>

        <?php  if($ok) afficheRes($entier1, $entier2, $op, $res); else echo $msg; ?>


    </section>
</body>
