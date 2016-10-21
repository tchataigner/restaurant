<?php

require "../../class/class_item.php";

$item = new Item();
$item->setDetails($_POST["details"]);
$item->setPrice($_POST["price"]);
$item->setName($_POST["name"]);
$item->add_item();
header('Location: /restaurant/index.php?page=menu'); 

?>
