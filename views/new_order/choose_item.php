

<!DOCTYPE html>
<html>

 <head>

        <meta charset="utf-8" />
        <title>Hello World</title>
  </head>
   <body>
        <form  action="/restaurant/controller/order/add_order.php" method="POST">
			<input type="text" size="25" placeholder="n°Item" name="item_number">
			<input type="text" size="25" placeholder="n°Client" name="client_number">
				      <button type="submit">Add order</button>

        </form>

        <?php $result?>

    </body>
</html>