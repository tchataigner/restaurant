
<!DOCTYPE html>
<html>
<?php include "/views/parts/head.php"; ?>
<body>
<?php include "/views/parts/header.php"; ?>
<?php

$page = $_GET['page'];

switch ($page) {
    case 'home':
        include "/views/home.php";
        break;
    case 'menu':
        include "/views/menu/list_menu.php";
        break;
    case 'edit_item':
        include "/views/menu/edit_item.php";
        break;
    case 'customer_number':
        include "/views/customer/recup_customer.php";
        break;
    case 'add_details':
        include "/views/customer/add_details.php";
        break;
    case 'choose_item':
        include "/views/new_order/choose_item.php";
        break;
    case 'add_item':
        include "/views/menu/add_item.php";
        break;
    case 'customer_list':
        include "/views/customer/customer_list.php";
        break;
    case 'edit_customer':
        include "/views/customer/edit_customer.php";
        break;
}



?>

</body>
</html>