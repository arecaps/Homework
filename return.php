<?php
  function add($val1, $val2) {
    $sum =$val1 + $val2;
	  return $sum;
  }
  
  $result = add(3,4);
  $result = add(3,$result);
  $result = add(5, $result);
    echo $result;
?>