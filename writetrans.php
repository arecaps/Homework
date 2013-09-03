<?php
$obj = new transactions;
$obj->write_trans();
		class transactions {
			function write_trans() {	
				$test = array ('amount' => 6098, 'type' => 'debit' );
				$sessn = array ('username' => 'arecaps' );
					$name = $sessn['username'];
					$keys =array_keys($test);
					$values=array_values($test);
					$trans=array($keys, $values);
					print_r($trans);
					$fp = fopen("{$name}.csv", 'a');
						foreach ($trans as $fields) {
						fputcsv($fp, $fields);
						}
						fclose($fp);	
			}
		
		}
?>
