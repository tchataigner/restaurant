<?php 

require "/controller/menu/all_item.php";

for ($i=0; $i < count($results); $i++) { 
	echo $results[$i][1];
	
	?>

	<form action="/restaurant/index.php?page=edit_item" method="POST">
		<input name="id" type="hidden" value=<?php echo strval($results[$i][0]); ?>>
		<button type="submit">Edit</button>
	</form>
	<form action="/restaurant/controller/menu/delete_item.php" method="POST">
		<input name="id" type="hidden" value=<?php echo strval($results[$i][0]); ?>>
		<button type="submit">Delete</button>
	</form>
	
<?php
	}
?>

<a href="/restaurant/index.php?page=add_item"><button>Add Item</button></a>
