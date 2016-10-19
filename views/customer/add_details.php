
<!DOCTYPE html>
<html>
 <head>
        <meta charset="utf-8" />
        <title>Hello World</title>
  </head>
   <body>
  <H1>hello</H1>
  <form action="/restaurant/controller/customers/new_customer.php" method="POST">
  	<label for="number">Phone Number</label>
  	<input type="text" name="number"><br/> 
  	<label for="cc">Credit Card</label>
  	<input type="text" name="cc"><br/>
  	<label for="address">Address</label>
  	<input type="text" name="address"><br/>
  	<label for="postal_code">Postal Code</label>
  	<input type="text" name="postal_code"><br/>
  	<label for="city">City</label>
  	<input type="text" name="city"><br/>
  	<label for="apartment">Apartment</label>
  	<input type="text" name="apartment"><br/>
	<button type="submit">Submit</button>
  </form>
<?php $result?>

</body>
</html>
