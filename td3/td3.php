<?php
if (isset($_POST['valider']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['age']) && !empty($_POST['genre']) && !empty($_POST['langages'])) {
    $nom = (isset($_POST['nom']))?$_POST['nom']:'';
    $nom = trim($nom);
    $prenom = (isset($_POST['prenom']))?$_POST['prenom']:'';
    $prenom = trim($prenom);
    $age = (isset($_POST['age']))?$_POST['age']:'';
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
    
    include("affichage.php");
    
    echo "<p>Bonjour ". ucwords($prenom)." " .strtoupper($nom).", vous avez $age $n</p>";
    echo "<p>Vous êtes $sexe.</p>";
    echo "<p>Vous connaissez les langages suivants : $langages.</p>";
    echo "<p>Votre langue maternelle est : $langue.</p>";
} else {
    echo "<p>Vous n'avez pas rempli le formulaire correctement.</p>";
}



?>
</section>
</body>
</html>