--TEST--
AmazonPAS::vehicle_part_search, with returnCurlHandle

--FILE--
<?php
	// Dependencies
	require_once dirname(__FILE__) . '/../../cloudfusion.class.php';

	// Use vehicle_search() to look up these values
	$pas = new AmazonPAS();
	$response = $pas->vehicle_part_search(59, 752, 2005, array(
		'returnCurlHandle' => true
	));

	// Success?
	var_dump($response);
?>

--EXPECT--
resource(9) of type (curl)
