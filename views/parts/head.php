<?php

$page = $_GET['page'];

switch ($page) {
    case 'home':
        $title="Homepage";
        break;
    case 'menu':
        $title="Menu";
        break;
    case 'edit_item':
        $title="Change Item Details";
        break;
    case 'customer_number':
        $title="Fill the customer number";
        break;
    case 'add_details':
        $title="Add a new customer";
        break;
    case 'choose_item':
        $title="Add an item to the order";
        break;
    case 'add_item':
        $title="Add an item to the menu";
        break;
    case 'customer_list':
        $title="Customers' List";
        break;
    case 'edit_customer':
        $title="Change customer details";
        break;
}


?>



 <head>
        <meta charset="utf-8" />
        <title><?php echo $title; ?> </title>
        <script src="/restaurant/js/jquery-3.1.1.min.js"></script>
        <script src="/restaurant/js/jquery.validate.min.js"></script>
        <script src="/restaurant/js/additional-methods.min.js"></script>
        <script type="text/javascript" src="/restaurant/js/js.js"></script>
  </head>