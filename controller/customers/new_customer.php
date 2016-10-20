<?php

require "../../class/class_customer.php";
require "../../class/class_order.php";

$item = new Customer();
$item->setNumber($_POST["number"]);
$item->setCC($_POST["cc"]);
$item->setAddress($_POST["address"]);
$item->setPostalCode($_POST["postal_code"]);
$item->setCity($_POST["city"]);
$item->setApartment($_POST["apartment"]);

$item->new_customer(); 

session_start();

$_SESSION['nbr']=$_POST["number"];

$order = new Order();
$id_order = $order->getIdOrder();

$value = $id_order[0];
$value[0]++;

$_SESSION['order']=$value[0];

header('Location: ../../index.php?page=choose_item');

 ?>