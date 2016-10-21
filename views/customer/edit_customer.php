<?php require "/controller/customers/edit_customer.php";?>

<form action="/restaurant/controller/customers/change_customer.php" method="POST" id="edit_customer">
<label for="number">Number :</label>
<input type="text" name="number" id="number" value="<?php echo strval($result[0][1]); ?>"><br/>
<label for="cc">Credit Card :</label>
<input type="text" name="cc" id="cc" value="<?php echo strval($result[0][2]); ?>"><br/>
<label for="address">Address :</label>
<input type="text" name="address" id="address" value="<?php echo htmlspecialchars($result[0][3]); ?>"><br/>
<label for="postal_code">Postal Code :</label>
<input type="text" name="postal_code" id="postal_code" value="<?php echo strval($result[0][4]); ?>"><br/>
<label for="city">City :</label>
<input type="text" name="city" id="city" value="<?php echo strval($result[0][5]); ?>"><br/>
<label for="apartment">Apartment :</label>
<input type="text" name="apartment" id="apartment" value="<?php echo strval($result[0][6]); ?>"><br/>
  <input name="id" type="hidden" value=<?php echo $result[0][0]; ?>>
  <button type="submit">Edit</button>
</form>
<?php $result?>
