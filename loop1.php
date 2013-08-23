<?php

  class squares {
// set variable
  public function __construct ($upperLimit) {
    $this->upperLimit = $upperLimit;
    $lowerLimit = 1;
  // keep printing squares until lower limit = upper limit
    while ($lowerLimit <= $upperLimit) 
      echo ($lowerLimit * $lowerLimit).'<br>';

      $lowerLimit++;
  } 
}
$obj = new squares(100);

echo 'END';

?>
