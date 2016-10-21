
<form  action="/restaurant/controller/order/add_order.php" method="POST" onsubmit="return confirm('Are you sure you want to add this item ?');">
	<input type="text" size="25" placeholder="n°Item" name="item_number">
	<input type="hidden" name="client_number" value=<?php session_start();  echo $_SESSION['nbr']; ?>>
	<input type="hidden" name="id_order" value=<?php echo $_SESSION['order']; ?>>
	<input type="text" size="25" placeholder="How much" name="number_of_item">

	<button type="submit">Add order</button>

</form>

	<a href="/restaurant/index.php?page=home"><button>Confirm Order</button></a>

<?php





require "/controller/order/recup_order.php";

$price=0;

foreach ($results as $item) { ?>

<p><?php echo $item[0];?> <?php echo $item[1];?></p><br/>

<?php
$price = $price + $item[1]*$item[2];
}
?>
<h1>Price = <?php echo $price;?></h1>


<p>Id   |   Name</p>


<?php require "/controller/menu/recup_item.php";

for ($i=0; $i < count($results); $i++) { 
	
	
?>

<p><?php echo $results[$i][0]; ?>   |   <?php echo $results[$i][1];?></p>

<?php

}

?>