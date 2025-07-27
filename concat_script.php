<?php
include 'includes/common.php';
if(isset($_POST['btn']))
{
	$Name=$_POST['fname'];
	$Email=$_POST['email'];
	$Message=$_POST['msg'];
	$sql="insert into Contact(Name,Email,Message) values('$Name','$Email','$Message')";
	if(mysqli_query($con,$sql))
	{
		echo "<h1 align='center' style='margin-top:200px;color:green;'>Your Message Send Successfully. Thank you for shopping with us.</h1><hr>
                    <h2 align='center'>Click <a href='products.php'>here</a> to purchase any other item.</h2>";
	}
	else
	{
		echo "Error:".mysqli_error($con);
	}
	mysqli_close($con);
}
?>