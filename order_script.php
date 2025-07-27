<?php
include 'includes/common.php';
if(isset($_POST['b1']))
{
	$Name=$_POST['name'];
	$Mob=$_POST['mob'];
	$Address=$_POST['add'];
	$sql="insert into Buy(UserName,MobNo,Address) values('$Name','$Mob','$Address')";
	if(mysqli_query($con,$sql))
	{
		echo "<h1 align='center' style='margin-top:200px;color:green;'>Your Order is Confirmed. Your Product is Delivered Within Five Day's. Thank you for shopping with us.</h1><hr>
                    <h2 align='center'>Click <a href='products.php'>here</a> to purchase any other item.</h2>";
	}
	else
	{
		echo "Error:".mysqli_error($con);
	}
	mysqli_close($con);
}
?>