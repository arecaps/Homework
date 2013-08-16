<?php

  class squares {
// set variable
  public function upperLimit() {
    $this->upperLimit = $upperLimit;
    $lowerLimit = 1;
  }
print_r($upperLimit);
// keep printing squares until lower limit = upper limit
    while ($lowerLimit <= $upperLimit) {
      echo ($lowerLimit * $lowerLimit).'<br>';

      $lowerLimit++;
  } 
}
$obj = new squares();

echo 'END';

?>
