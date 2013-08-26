<?php
  
   	for($var = 1;$var<50;$var ++) {
	  if($var %2 ==1) {
		continue;
	  }	
   	  	echo $var. ", ";
   	}
	echo "<br>";
	for ($i=0; $i<=5; $i++) {
	  if ($i % 2 ==0 ) {continue;}
	    for ($k = 0; $k<=5; $k++) {
		  echo $i. "-". $k. "<br>";
		}
    }
	echo "<br>";
	for($var = 1;$var<50;$var ++) {
	  if($var ==24) {
		break;
	  }	
   	  	echo $var. ", ";
   	}
?>   	 