<?php 
    include('connect.php');
	
    if (isset($_POST['btnlogin'])) 
    {
        $email=$_POST['txtemail'];
        $password=$_POST['txtpassword'];

        $password=mysqli_real_escape_string($connection,$password);

        //$select=mysqli_query($connection,"SELECT * FROM customer WHERE Email=\"$email\" AND Password=\"$password\"");

        $select=mysqli_query($connection,"SELECT * FROM customer WHERE Email='$email' AND Password='$password'");
        $count=mysqli_num_rows($select);
        if ($count==0) 
        {
            echo "<script>alert('Invalid User')</script>";
        }
        else
        {
            echo "<script>alert('Login Successful');location='customer_register.php'</script>";
        }
    }
 ?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <form action="customer_login.php" method="post">
        <label>Email</label>
        <input type="email" name="txtemail" placeholder="Please enter email">
        <br>

        <label>Password</label>
        <input type="password" name="txtpassword" placeholder="Please enter password">
        <br>

        <input type="submit" name="btnlogin" value="login">
    </form>
</body>
</html>