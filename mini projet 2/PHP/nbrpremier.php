<?php
if(empty($_POST['mini']) or empty($_POST['maxi']) ){
  echo "error !!!";
  return false;
}
  $nb =$_POST['mini'] ;
  $nb_max = $_POST['maxi'];
  
while ($nb <= $nb_max) {
  if ($nb == 1) {
  echo $nb.' n\'est pas un nombre premier<br>';
  $nb++;
  continue;
  }
$a = 0;
  for ($i=2; $i<$nb; $i++){
  
    if (is_int($nb/$i)){
    $a++;
    echo $nb.' n\'est pas un nombre premier<br>';
    break;
    }
  }
if ($a == 0) echo '<b>'.$nb.' est un nombre premier</b><br>';
$nb++;
}

?>