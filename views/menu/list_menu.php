<?php 

require "/controller/menu/recup_item.php";

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
