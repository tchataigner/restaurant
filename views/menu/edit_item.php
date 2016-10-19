<?php require "../../controller/menu/edit_item.php"; ?>

<!DOCTYPE html>
<html>
 <head>
        <meta charset="utf-8" />
        <title>Hello World</title>
        <script src="../../js/jquery-3.1.1.min.js"></script>
        <script src="../../js/jquery.validate.min.js"></script>
        <script type="text/javascript" src="../../js/js.js"></script>
  </head>
   <body>
  <H1>hello</H1>
  <form action="../../controller/menu/change_item.php" method="POST" id="edit_menu">
  	<input type="text" name="name" id="name" placeholder= <?php echo strval($result[0][1]); ?>><br/>
  	<input type="text" name="price" id="price" placeholder=<?php echo strval($result[0][2]); ?>><br/>
  	<input type="text" name="details" id="details" placeholder=<?php echo strval($result[0][3]); ?>><br/>
	<input name="id" type="hidden" value=<?php echo $result[0][0]; ?>>
	<button type="submit">Edit</button>
  </form>
<?php $result?>


</body>
</html>
