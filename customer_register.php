<?php 
	include('connect.php');

	if (isset($_POST['btnregister'])) 
	{
		$name=$_POST['txtname'];
		$email=$_POST['txtemail'];
		$password=$_POST['txtpassword'];
		$repassword=$_POST['txtrepassword'];

		if ($password!==$repassword) 
		{
			echo "<script>alert('Password does not match');location='customer_register.php'</script>";
		}
		else
		{
			$select=mysqli_query($connection,"SELECT * FROM customer WHERE Email='$email'");
			$count=mysqli_num_rows($select);
			if ($count==0) 
			{
				$insert=mysqli_query($connection,"INSERT INTO customer(User_Name,Email,Password) values('$name','$email','$password')");
				if ($insert) 
				{
					echo "<script>alert('Customer Register Success!')</script>";
					echo "<script>location='customer_register.php'</script>";
				}
				else
				{
					echo mysqli_error($connection);
				}	
			}
			else
			{
				echo "<script>alert('Email already exist')</script>";
			}
		}
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="customer_register.php" method="post">

		<label>User Name :</label>
		<input type="text" name="txtname" required>
		<br>

		<label>Email :</label>
		<input type="email" name="txtemail" required>
		<br>

		<label>Password :</label>
		<input type="password" name="txtpassword" required>
		<br>

		<label>Retype Password :</label>
		<input type="password" name="txtrepassword" required>
		<br>

		<input type="submit" name="btnregister" value="Register">
		<input type="reset" name="btncancel" value="Cancel">

	</form>
</body>
</html>