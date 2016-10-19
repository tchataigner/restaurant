<?php

require "../../class/class_customer.php";



$items = new Customer();
$items->setNumber($_POST["number"]);
$results = $items->retrieve_customer();
/* var_dump($results);
	exit; */

if (empty($results)) {
	 	header('Location: ../../index.php?page=add_details');
}
 else {

 	header('Location: ../../index.php?page=customer_number');
	/* Here save the number of the customer in the new order table */ 
	}

?>