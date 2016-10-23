<?php

require "../../class/class_customer.php";
require "../../class/class_order.php";



$customer = new Customer();
$customer->setNumber($_POST["number"]);
$result = $customer->retrieve_customer();


if (empty($results)) {

	 header('Location: ../../index.php?page=add_details');
}
 else {
 	session_start();
 	$_SESSION['nbr']=$_POST["number"];
 	$order = new Order();
 	$id_order = $order->getIdOrder();
 	$value = $id_order[0];
 	$value[0]++;
 	$_SESSION['order']=$value[0];
 	header('Location: ../../index.php?page=choose_item');
	/* Here save the number of the customer in the new order table */ 
	}

?>