<?php

  function say_hello () {
    echo "Hello World!<br>";
  }
    say_hello();
	
	 function say_hello_to($word) {
       echo "Hello {$word}!<br>";
  }
   say_hello_to('me');
   say_hello_to('him');
   say_hello_to('her');
   say_hello_to('you');
   
    function say_hello_again($word) {
      echo "Hello {$word}!<br>";
  }
    $name='John Doe';
    say_hello_again($name);
	
	function better_hello($greeting, $target, $punct) {
	  echo $greeting. " ". $target. " " . $punct. "<br>";
	}
	better_hello("Hello", $name, "!");
	better_hello("Hi", $name, "!!!");
	better_hello("Shalom", "Chaver", "!");
?>