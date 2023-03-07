<?php
include("affichage.php");
if (isset($_POST['valider']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['age']) && !empty($_POST['genre']) && !empty($_POST['langages'])) {
    $nom = (isset($_POST['nom']))?$_POST['nom']:null;
    $prenom = (isset($_POST['prenom']))?$_POST['prenom']:null;
    $age = (isset($_POST['age']))?$_POST['age']:null;
    $genre = (isset($_POST['genre']))?$_POST['genre']:null;
    $langages = (isset($_POST['langages']))?$_POST['langages']:null;
    if ($langages != null) {
        $langages = implode(", ", $langages);
    } else {
        $langages = "aucun";
    }
    if ($genre == "feminin") {
        $sexe = "une femme";
    } else if ($genre == "masculin") {
        $sexe = "un homme";
    } else {
        $sexe = "un être humain";
    }
    $langue = (isset($_POST['langue']))?$_POST['langue']:null;

    if ($age >1) $n = "ans";
    else $n = "an";
    

    echo "<p>Bonjour ". ucwords($prenom)." " .strtoupper($nom).", vous avez $age $n</p>";
    echo "<p>Vous êtes $sexe.</p>";
    echo "<p>Vous connaissez les langages suivants : $langages.</p>";
    echo "<p>Votre langue maternelle est : $langue.</p>";
}

//première lettre de la chaine $prenom en majuscule
//strtoupper($prenom)
//première lettre de la chaine $prenom en minuscule
//strtolower($prenom)
//première lettre de chaque mot de la chaine $prenom en majuscule
//ucwords($prenom)


?>
</section>
</body>
</html>