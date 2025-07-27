<?php
	require "includes/common.php";
	session_start();
	$query = "SELECT * from users";
	$result = mysqli_query($con, $query);
?>

<html>
<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		
		<script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/0.4.2/sweet-alert.min.js"></script>
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/0.4.2/sweet-alert.css">
	 </head>
	 <style>
			label{
				font-weight: bold;
			}
		</style>
<body>
<input type="email" value="<?php echo $result ?>" class="form-control">
	<!--<form action="pay.php" method="post">
		<label for="">First Name:</label>
		<div class="form-group">
			<input type="text" name="fn" id="fn" class="form-control">
		</div>
		<label for="">Last Name</label>
		<div class="form-group">
			<input type="email" name="ln" id="ln" class="form-control" >
		</div>
		<label for="">Email:</label>
		<div class="form-group">
			<input type="email" name="em" id="em" class="form-control">
		</div>
	</form>-->
	<input type="email" value="<?php echo $result ?>" class="form-control">
</body>
</html>