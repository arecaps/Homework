<?php
	require 'class.Address.inc';
	
	echo '<h2>Instantiating Address</h2>';
	$address = new Address;
	
	echo '<h2>Empty Address</h2>';
	
	$address->street_address_1 = '555 Fake Street';
	$address->city_name = 'Townsville';
	$address->subdivision_name = 'NJ';
	$address->postal_code = '12345';
	$address->country_name = 'United States of America';
	
	echo '<h2>Displaying Address</h2>';
	echo $address->display();
	
	
?>
