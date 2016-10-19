<?php

require "../../class/class_order.php";


$order = new Order();

$order->setId_item($_POST["item_number"]);
$order->setItem_number($_POST("number_of_item"]);
$order->setId_client($_POST["client_number"]);
$order->choose();

header('Location: ../../views/new_order/choose_item.php'); 


?>