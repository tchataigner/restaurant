<?php require "/controller/menu/edit_item.php"; ?>

<form action="/restaurant/controller/menu/change_item.php" method="POST" id="edit_menu">
<label for="name">Name :</label>
<input type="text" name="name" id="name" value="<?php echo strval($result[0][1]); ?>"><br/>
<label for="price">Price :</label>
<input type="text" name="price" id="price" value="<?php echo strval($result[0][2]); ?>"><br/>
<label for="details">Details :</label>
<input type="text" name="details" id="details" value="<?php echo strval($result[0][3]); ?>"><br/>
  <input name="id" type="hidden" value=<?php echo $result[0][0]; ?>>
  <button type="submit">Edit</button>
</form>
<?php $result?>


