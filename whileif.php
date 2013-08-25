<?php
  $obj = new test;

   class test {
   	  public function __construct() {
	    $var = 1;
   	  	while($var<500) {
   	  		echo "$var , ";
   	  		$var ++;
			  if($var%20 ==1) {
			   echo "<br>";
			  } 
   	  	}
	  }
	
	}
?>   	 