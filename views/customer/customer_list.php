<?php 

require "/controller/customers/list_customer.php";

for ($i=0; $i < count($results); $i++) { 
	echo $results[$i][1];
	
	?>

	<form action="/restaurant/index.php?page=edit_customer" method="POST">
		<input name="id" type="hidden" value=<?php echo strval($results[$i][0]); ?>>
		<button type="submit">Edit</button>
	</form>
	<form action="/restaurant/controller/customer/delete_customer.php" method="POST">
		<input name="id" type="hidden" value=<?php echo strval($results[$i][0]); ?>>
		<button type="submit">Delete</button>
	</form>
	
<?php
	}
?>
