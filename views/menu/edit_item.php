<?php require "../../controller/menu/edit_item.php"; ?>

<!DOCTYPE html>
<html>
 <head>
        <meta charset="utf-8" />
        <title>Hello World</title>
  </head>
   <body>
  <H1>hello</H1>
  <form action="../../controller/menu/change_item.php" method="POST">
  	<input type="text" name="name" placeholder= <?php echo strval($result[0][1]); ?>><br/>
  	<input type="text" name="price" placeholder=<?php echo strval($result[0][2]); ?>><br/>
  	<input type="text" name="details" placeholder=<?php echo strval($result[0][3]); ?>><br/>
	<input name="id" type="hidden" value=<?php echo $result[0][0]; ?>>
	<button type="submit">Edit</button>
  </form>
<?php $result?>

</body>
</html>
