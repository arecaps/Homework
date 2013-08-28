<?php

  $list = array('firstname' => 'Aryeh ', 'lastname' => 'Caplan ', 
	  'email' => 'arecaplan@gmail\.com ',
	  'username' => 'arecaps ', 'pswd' => 23456);
		$keys =array_keys($list);
		$values=array_values($list);
		$user=array($keys, $values);
	
			$fp = fopen('users.csv', 'w');

				foreach ($user as $fields) {
				  fputcsv($fp, $fields);
				}
				
		//print_r($user);
			fclose($fp);
?>