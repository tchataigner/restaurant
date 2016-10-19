<?php

$page = $_GET['page'];

if ($page == 'home') {
	include "/views/home.php";
} elseif ($page == 'menu') {
	include "/views/menu/list_menu.php";
} elseif ($page == 'customer_number') {
	include "/views/customer/recup_customer.php";
} elseif($page == 'add_details'){
	include "/views/customer/add_details.php";
}elseif($page == 'choose_items'){
	include "/views/new_order/choose_items.php"
}

?>