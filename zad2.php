<?php
  include 'nav.php';
  $waga = 92;
  for ($wzrost = 180; $wzrost<=250; $wzrost+=5){
    echo "$wzrost cm = $waga kg <br />";
    $waga+=2;
  }

?>