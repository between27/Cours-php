<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <title>Formulaires - méthode PUT</title>
  <link rel="stylesheet" href="formulaires.css" />
</head>
<body>
  <section>
    <h1>Formulaire de saisie</h1>
    <form action = 'formulaires.php' method = 'post'>
      <fieldset>
        <legend>Saisie des données personnelles</legend>
        <table>
          <tr>
            <td><label>NOM : </label></td>
            <td><input type='text' name='nom' value = '<?= $valeurs['nom'] ?>' placeholder='entrez votre nom'  /></td>
            <td><?= $erreurs['nom'] ?></td>
          </tr>
          <tr>
            <td><label>Prénom : </label></td>
            <td><input type='text' name='prenom' value = '<?= $valeurs['prenom'] ?>' placeholder='entrez votre prénom'  /></td>
            <td><?= $erreurs['prenom'] ?></td>
          </tr>
          <tr>
            <td><label>Age : </label></td>
            <td><input type='number' name='age' value = '<?= $valeurs['age'] ?>' placeholder='entrez un entier'  /></td>
            <td><?= $erreurs['age'] ?></td>
          </tr>
          <tr>
            <td><label>Genre : </label></td>
            <td>
              <?php
              foreach($sexes as $cle=>$sexe) {
                 echo "<input type = 'radio' name = 'sexe' value='$cle' ";
                 if ($valeurs['genre']==$cle) echo "checked = 'checked'";
                 echo "/>$sexe";
              }
              ?>
            </td>
          </tr>
        </table>
      </fieldset>

      <fieldset>
        <legend>Compétences dans les langages informatiques </legend>
        <?php     
          foreach ($listeLangages as $unLangage){
            echo "<input type='checkbox' name='langages[$unLangage]' value='$unLangage' ";
            if (isset($valeurs['langages'][$unLangage])) echo 'checked ="checked"';
   		      echo " /> $unLangage";
          }
        ?>
      </fieldset>

      <fieldset>
        <legend>Langue maternelle</legend>
        <select name = "langue" />
        <?php
          foreach ($langues as $uneLangue){
            echo "<option value='$uneLangue'";
            if ($uneLangue == $valeurs['langue']) {
              echo 'selected="selected"';
            }
            echo ">", $uneLangue, "</option>";

          }
        ?>
        </select>
      </fieldset>

      <input type = 'submit' name = 'valider'  value = 'Validez'>

      <!-- le type 'reset' vide le formulaire avant validation ==> pas d'action php  -->    
      <input type = 'reset'  name = 'reset'    value = 'Annulez'>

      <!-- le type 'submit' envoie les données saisies ==> action PHP -->      
      <input type = 'submit' name = 'resetPHP' value = 'Annulez en PHP'>

    </form>
    <?php


    if (!empty($valeurs['nom'])){
      echo "<p>Bonjour " .$valeurs['prenom'] ." " .$valeurs['nom'] .", vous avez " .$valeurs['age'] ." ans.</p>";
      $typeGenre = ($valeurs['genre'] == "F")?"une femme": (($valeurs['genre'] == "M")?"un homme":"de sexe inconnu");
      echo "<p>Vous êtes $typeGenre.</p>";
      echo "<p>Vous connaissez les langages suivants : ";
      foreach ($valeurs['langages'] as $key => $value) {
        echo $key, ' ';
      }
      echo "<p>Votre langue maternelle est : ". $valeurs['langue']."</p>";
    }
    ?>
  </section>
</body>
