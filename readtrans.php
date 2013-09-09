<?php
	$name = 'arecap';
	$balance = 0;
	$subtract = 0;
		@$handle = fopen("{$name}trns.csv", "r");
			while (($data = fgetcsv($handle, 0, ",")) !== FALSE) {
				$records[] = $data;	
			}	 
			fclose($handle);
			//print_r($records);
			
			foreach ($records as $row) {
			${($row[1]).'s'}[] = $row;
			}
//$arr = get_defined_vars();
print_r($credits);
echo '<br>';
print_r($debits);
		foreach ($credits as $add) {
			$balance = ($balance + $add[0]);
			}
			echo '<br>';
			print_r($balance);
				echo '<br>';
		foreach ($debits as $sub) {
			$subtract = ($subtract + $sub[0]);
			}
			print_r($subtract);
		$current = ($balance - $subtract);
		echo '<br>';
		print_r($current);
?>