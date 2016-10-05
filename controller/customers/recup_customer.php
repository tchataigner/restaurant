<?php

require "/class/class_customer.php";



$items = new Customer();
$items->setNumber($_POST["number"]);
$results = $items->retrieve_customer();
var_dump($results);
exit();

?>