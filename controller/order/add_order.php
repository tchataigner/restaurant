<?php

require "../../class/class_order.php";


$order = new Order();

$order->setId_item($_POST["item_number"]);

$order->setId_client($_POST["client_number"]);
$order->choose();

?>