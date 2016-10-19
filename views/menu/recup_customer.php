<?php require "/controller/customers/recup_customer.php"; ?>

<!DOCTYPE html>
<html>
 <head>
        <meta charset="utf-8" />
        <title>Hello World</title>
  </head>
   <body>
  <H1>hello</H1>
  <form action="/controller/customers/recup_customer.php" method="POST">
  	<input type="text" name="number"><br/>
	<button type="submit">Edit</button>
  </form>
<?php $result?>

</body>
</html>
