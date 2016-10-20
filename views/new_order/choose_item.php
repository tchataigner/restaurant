
<form  action="/restaurant/controller/order/add_order.php" method="POST">
  <input type="text" size="25" placeholder="n°Item" name="item_number">
  <input type="hidden" name="client_number" value=<?php session_start();  echo $_SESSION['nbr']; ?>>
  <input type="hidden" name="id_order" value=<?php echo $_SESSION['order']; ?>>
  <input type="text" size="25" placeholder="How much" name="number_of_item">

  <button type="submit">Add order</button>

</form>

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



