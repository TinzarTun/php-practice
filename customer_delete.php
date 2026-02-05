<?php 
    include('connect.php');
    if (isset($_REQUEST['cid'])) 
    {
        $customerID=$_REQUEST['cid'];
        $delete="DELETE FROM customer WHERE User_ID='$customerID'";
        $runquery=mysqli_query($connection,$delete);
        if ($runquery) 
        {
            echo "<script>alert('Delete Successful')</script>";
            echo "<script>location='customer_view.php'</script>";
        }
    }
 ?>