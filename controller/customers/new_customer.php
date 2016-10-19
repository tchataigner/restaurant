<?php

require "../../class/class_customer.php";
echo "Hello";
/* exit; */

$item = new Customer();
$item->setNumber($_POST["number"]);
$item->setCC($_POST["cc"]);
$item->setAddress($_POST["address"]);
$item->setPostalCode($_POST["postal_code"]);
$item->setCity($_POST["city"]);
$item->setApartment($_POST["apartment"]);

$item->new_customer(); 


 ?>