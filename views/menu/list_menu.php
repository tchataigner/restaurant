<!DOCTYPE html>
<html>
 <head>
        <meta charset="utf-8" />
        <title>Hello World</title>
  </head>
   <body>

<?php

require "/controller/menu/recup_item.php";


var_dump(count($results));

for ($i=0; $i < count($results); $i++) { 
	echo $results[$i][1];
	?>
	<form action="/restaurant/views/menu/edit_item.php" method="POST">
		<input name="id" type="hidden" value=<?php echo strval($results[$i][0]); ?>>
	      <button type="submit">Edit</button>
	    </form>
	<?php
}
?>
</body>
</html>