<?php
var_dump($_POST);
  $sexes        = ['F'=>'Féminin','M'=>'masculin','A'=>'Autre'];
  $listeLangages= ["C", "Java", "TypeScript", "PHP", "C++", "Cobol", "Aucun"];
  $langues      = ['Anglais', 'Allemand', 'Arabe', 'Chinois','Espagnol', 'Portugais'];
  sort($langues);
  // ajout langue par défaut en début de tableau
  array_unshift($langues,'Français');

   $erreurs = ['nom'=>"", 'prenom'=>"", 'age'=>""];  
// initialisation des variables à null ou valeur par défaut
   $valeurs['nom']      = (isset($_POST['nom'])?strtoupper(trim($_POST['nom'])):null);
   $valeurs['prenom']   = (isset($_POST['prenom'])?trim($_POST['prenom']):null);
   $valeurs['age']      = (isset($_POST['age'])?$_POST['age']:null);
   //  bouton radio
   $valeurs['genre']    = (isset($_POST['sexe'])?$_POST['sexe']:'A');
   //  checkbox
   $valeurs['langages'] = (isset($_POST['langages'])?$_POST['langages']:['Aucun'=>'Aucun']);
   //  select
   $valeurs['langue']   = (isset($_POST['langue'])?$_POST['langue']:'Français');

  if (isset($_POST['valider'])) {
    if (!isset($valeurs['nom']) or strlen(($valeurs['nom']))==0) 			    { $erreurs['nom']    = 'saisie obligatoire du nom';}
    if (!isset($valeurs['prenom']) or strlen(($valeurs['prenom']))==0) 		{	$erreurs['prenom'] = 'saisie obligatoire de la ville'; }
    if (!isset($valeurs['age']) or !is_numeric($valeurs['age']) or $valeurs['age']<1 or $valeurs['age']>120 )		{	$erreurs['age'] = 'l\'âge doit être compris entre 1 et 120 ans';	}  
  }
  else if (isset($_POST['resetPHP'])) {
  // reset PHP
    $valeurs = ['nom'=>null, 'prenom'=>null, 'age'=>null, 'genre'=>'A', 'langages'=>['Aucun'=>'Aucun'], 'langue'=>'Français'];
  } 

  include 'formulaires.view.php';
?>
