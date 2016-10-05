<?php

$page = $_GET['page'];

if ($page == 'home') {
	include "/views/home.php";
} elseif ($page == 'menu') {
	include "/views/menu/list_menu.php";
} elseif ($page == 'customer_number') {
	include "/views/customer/recup_customer.php";
}

?>