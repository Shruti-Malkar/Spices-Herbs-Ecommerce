<html>
<head>
	<link rel="stylesheet" href="orderstyle.css">
</head>
<body>
	<form method="POST" action="order_script.php" align="center">
		<div class="container">
			<h1 style="color:#04AA6D;"><b>Please fill the below details to Confirm Order.</b></h1>
			<hr>

			<label for="name"><b>Enter Name:</b></label><br>
			<input type="text" placeholder="Enter Name" name="name" id="name" required><br><br>

			<label for="mob"><b>Enter Mobile No.:</b></label><br>
			<input type="number" placeholder="Enter Mobile No." name="mob" id="mob" required><br><br>

			<label for="address"><b>Enter Address:</b></label><br>
			<textarea cols="50" rows="5" id="add" name="add" placeholder="Enter Address" required></textarea><br><br>			

			<button type="submit" name="b1" class="registerbtn">Confirm Order</button>
		</div>

</form>
</body>
</html>