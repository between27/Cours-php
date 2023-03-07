<?php
  /*echo '<pre>';
  var_dump($_GET);
  echo '</pre>';*/

  $ok = FALSE;
  $res = $msg = "";
var_dump(phpinfo());
  if (isset($_GET['vider'])) {
    $entier1 = null;
    $entier2 = null;
  }
  else {
    $entier1  = (isset($_GET['valeur1'])?$_GET['valeur1']:null);
    $entier2  = (isset($_GET['valeur2'])?$_GET['valeur2']:null);
    $ok = !empty($entier1)&&!empty($entier2);
    if ($ok){
      if (isset($_GET['add'])){
        $res = $entier1 + $entier2;
        $op = " + ";
      }
      elseif (isset($_GET['mul'])){
        $res = $entier1 * $entier2;
        $op = " * ";
      }
      elseif (isset($_GET['sous'])){
        $res = $entier1 - $entier2;
        $op = " - ";
      }
      elseif (isset($_GET['divi'])){
        /* à partir de  PHP 8
        try{
          $res = $entier1 / $entier2;
          $op = " / ";
        }catch (DivisionByZeroError $e) {
          $msg = "<div><p>Attention : Division par zéro ! ";
          $ok = FALSE;
        }
        */
        // version antérieure à PHP 8
        if ($entier2 == 0) {
          $msg = "<div><p>Attention : Division par zéro ! ";
          $ok = FALSE;
        }
        else {
          $res = $entier1 / $entier2;
          $op = " / ";         
        }
      }
    }
  }

  function afficheRes($a, $b, $op, $resultat){
      echo "<div><p>Le résultat de l'opération : <br /><br />";
      echo $a.' '.$op.' '.$b.' = '.number_format($resultat,2)."</p></div>";
  }

  include 'calculette.view.php';

?>
