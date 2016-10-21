<?php

require "/class/class_customer.php";

$customer = new Customer();
$customer->setId($_POST["id"]);
$result = $customer->load_customer();

