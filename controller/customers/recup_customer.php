<?php

require "../../class/class_customer.php";



$items = new Customer();
$items->setNumber($_POST["number"]);
$results = $items->retrieve_customer();

if (empty($results)) {
	 	header('Location: ../../views/customer/add_details.php');      
	} else {
		/* Here save the number of the customer in the new order table */ 
	}

?>