<?php

  $list = array('firstname' => 'Aryeh ', 'lastname' => 'Caplan ', 
	  'email' => 'arecaplan@gmail\.com ',
	  'username' => 'arecaps ', 'pswd' => 23456);
		$keys =array_keys($list);
		$values=array_values($list);
		$user=array($keys, $values);
		$name = $values[3];
		
				if (!file_exists("{$name}.csv")) {
				    $fp = fopen("{$name}.csv", 'w');
					  foreach ($user as $fields) {
					  fputcsv($fp, $fields);
					}
						fclose($fp);	
				} else {
					echo "Sorry, that username is not available, please choose another name";
				}
		//print_r($name);

?>