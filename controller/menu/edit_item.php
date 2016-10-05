<?php

require "../../class/class_item.php";

$item = new Item();
$item->setId($_POST["id"]);
$result = $item->load_item();
