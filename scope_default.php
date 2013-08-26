<?php
   $bar ='outside';
   
     function foo() {
	   global $bar;
	   $bar= 'inside';
	   
	 }
	 echo "1: ". $bar . "<br>";
	 foo();
	 echo "2: ". $bar . "<br>";
	 
	 function paint($room='office', $color='red') {
	   return "The color of the $room is $color. <br>";
	 }
   
	echo paint();
	echo paint('playroom', 'green');
	echo paint('playroom', null);
?>