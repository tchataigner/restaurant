<?php

require "/class/class_order.php";

echo " coucou";


$orders = new Order();
$results = $orders->resume();

?>