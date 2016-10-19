

<!DOCTYPE html>
<html>

 <head>

        <meta charset="utf-8" />
        <title>Hello World</title>
  </head>
   <body>
   	<?php echo $meh; ?>
        <form  action="/restaurant/controller/order/add_order.php" method="POST">
			<input type="text" size="25" placeholder="n°Item" name="item_number">
			<input type="text" size="25" placeholder="n°Client" name="client_number" value=<?php echo $meh; ?>>
			<input type="text" size="25" placeholder="How much" name="number_of_item">

				      <button type="submit">Add order</button>

        </form>

<?php





require "../../controller/order/recup_order.php";


?>





    </body>
</html>