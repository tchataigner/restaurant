<?php

require "/class/class_income.php";

$income = new Income();
$results = $income->get_income_day();

$income_day=0;
foreach ($results as $price) {

	$income_day = $income_day + ($price[0]*$price[1]);
}

?>