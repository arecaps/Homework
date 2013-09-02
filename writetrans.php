<?php
	$test = array ('amount' => 234, 'type' => 'debit' );
	$sessn = array ('username' => 'arecaps' );
		$name = $sessn['username'];
		//print_r($name);
		class transactions {
			function write_trans() {
				$fp = fopen("{$name}.csv", 'a');
					foreach ($test as $fields) {
					fputcsv($fp, $fields);
					}
					fclose($fp);	
			
			}
		
		}
?>