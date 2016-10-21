<?php

require "../../class/class_customer.php";



$customer = new Customer();
$customer->setId($_POST["id"]);
$customer->setNumber($_POST["number"]);
$customer->setCC($_POST["cc"]);
$customer->setAddress($_POST["address"]);
$customer->setPostalCode($_POST["postal_code"]);
$customer->setCity($_POST["city"]);
$customer->setApartment($_POST["apartment"]);
$results = $customer->change();

header('Location: /restaurant/index.php?page=customer_list'); 
 ?>