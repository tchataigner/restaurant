
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
    case 'customer_number':
        include "/views/customer/recup_customer.php";
        break;
    case 'add_details':
        include "/views/customer/add_details.php";
        break;
    case 'choose_item':
        include "/views/new_order/choose_item.php";
        break;
}



?>

</body>
</html>