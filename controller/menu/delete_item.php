<?php

require "../../class/class_item.php";

$item = new Item();
$item->setId($_POST["id"]);
$item->delete_item();
header('Location: /restaurant/index.php?page=menu'); 

?>
