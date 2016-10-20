<?php

require "/class/class_order.php";



$orders = new Order();

$orders->setId_order( $_SESSION['order']);
$results = $orders->resume();


?>