<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="td3.css">
    <title>Document</title>
</head>
<body>

<section>
 <h1>Formulaire</h1>
 <form action = "td3.php" method = "POST">
 <fieldset>
<legend>Saisie des données personnelles</legend>
 <p>Entrez votre prénom et un entier : </p>
 <label>NOM : </label>
 <input type="text" name="nom"
placeholder="entrez votre nom" value ='<?= $valeurs['nom'] ?>'/>
<br /><br />
<label>Prénom : </label>
 <input type="text" name="prenom"
placeholder="entrez votre prénom" />
<br /><br />
 <label>Age: </label>
 <input type="number" name="age"
placeholder="entrez un entier" />
<br><br>
<label>Genre : </label>
 <input id ="radio_feminin" type="radio" name="genre" value= "feminin"/>
 <label for="radio_feminin">Féminin</label>
 <input id ="radio_masculin" type="radio" name="genre" value= "masculin"/>
 <label for="radio_masculin">Masculin</label>
 <input id="radio_autre" type="radio" name="genre" value= "autre"/>
 <label for="radio_autre">Autre</label>
<br /><br />
 </fieldset>
 <fieldset>
    <legend>Compétences dans les langages informatiques</legend>
    <input type="checkbox" name="langages[]" id="check_c" value ="C">
    <label for="check_c">C</label>
    <input type="checkbox" name="langages[]" id="check_java" value ="Java">
    <label for="check_java">Java</label>
    <input type="checkbox" name="langages[]" id="check_typeScript" value ="TypeScirpt">
    <label for="check_typeScript">TypeScript</label>
    <input type="checkbox" name="langages[]" id="check_php" value ="PHP">
    <label for="check_php">PHP</label>
    <input type="checkbox" name="langages[]" id="check_c++" value ="C++">
    <label for="check_c++">C++</label>
    <input type="checkbox" name="langages[]" id="check_cobol" value ="Cobol">
    <label for="check_cobol">Cobol</label>
    <input type="checkbox" name="langages[]" id="check_aucun" value ="Aucun">
    <label for="check_aucun">Aucun</label>

 </fieldset>


 <fieldset>
 <legend>Langue maternelle</legend>
<select name="langue" id="liste_langue">
    <option value="français">Français</option>
    <option value="anglais">Anglais</option>
    <option value="allemand">Allemand</option>
    <option value="arabe">Arabe</option>
    <option value="chinois">Chinois</option>
    <option value="espagnol">Espagnol</option>
    <option value="portuguais">Portuguais</option>
</select>
 </fieldset>
 
 <input type = "submit" name = "valider" value = "Validez" />
 <input type = "reset" name = "reset" value = "Annulez" />
 </form>


