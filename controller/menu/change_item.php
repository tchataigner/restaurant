<?php

require "../../class/class_item.php";



$item = new Item();
$item->setId($_POST["id"]);
$item->setName($_POST["name"]);
$item->setPrice($_POST["price"]);
$item->setDetails($_POST["details"]);
$results = $item->change();

header('Location: /restaurant/index.php?page=menu'); 
 ?>