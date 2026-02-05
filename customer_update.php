<?php 
    include('connect.php');
    if (isset($_REQUEST['cid'])) 
    {
        $UserID=$_REQUEST['cid'];
        $select=mysqli_query($connection,"SELECT * FROM customer WHERE User_ID='$UserID'");
        $data=mysqli_fetch_array($select);
        $cn=$data['User_Name'];
        $em=$data['Email'];
        $pa=$data['Password'];
    }
    if (isset($_POST['btnupdate'])) 
    {
        $uid=$_POST['txtID'];
        $ucn=$_POST['txtname'];
        $uem=$_POST['txtemail'];
        $upa=$_POST['txtpassword'];
        $update="UPDATE customer SET User_Name='$ucn', Email='$uem', Password='$upa' WHERE User_ID='$uid'";
        $run=mysqli_query($connection,$update);
        if ($run) 
        {
            echo "<script>alert('Update Successful')</script>";
            echo "<script>location='customer_view.php'</script>";
        }
        else
        {
            echo mysqli_error($connection);
        }
    }
 ?>
 <form action="customer_update.php" method="post">

        <input type="hidden" name="txtID" value="<?php echo $_REQUEST['cid'] ?>">

        <label>User Name :</label>
        <input type="text" name="txtname" required value="<?php echo $cn ?>">
        <br>

        <label>Email :</label>
        <input type="email" name="txtemail" required value="<?php echo $em ?>">
        <br>

        <label>Password :</label>
        <input type="password" name="txtpassword" required value="<?php echo $pa ?>">
        <br>

        <input type="submit" name="btnupdate" value="Update">
        <input type="reset" name="btndelete" value="Delete">

    </form>