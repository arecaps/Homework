<?php

$obj =new validate;

	class validate {
		function __construct() {
			$test =array('username' => 'arecaps', 'pswrd' => 123456);
				$user = $test['username'];
				print_r($user);
				
				if (!file_exists("{$user}.csv")) {
					echo 'Sorry, that username was not found, please try again.  <br> 
						<a href="bank.php?class=form1">Dont have an account? Click here to open one.</a>';
			
			/*if (($handle = fopen({$user}.csv, "r")) !== FALSE) {
				while (($data = fgetcsv($handle, 0, ",")) !== FALSE) {
						$field_names = $this->create_field_names($data);
					} else {
						$records[] = $this->create_record($data, $field_names);	
					}	

*/
				} else {
					echo "<h1>Welcome back!</h1>". '<br> <a href="bank.php?class=form3">Click here to enter new transactions.</a>';
}
}
}
?>