<?php 
    include('connect.php');
    if (isset($_REQUEST['bid'])) 
    {
        $BrandID=$_REQUEST['bid'];
        $delete="DELETE FROM brand WHERE BrandID='$BrandID'";
        $run=mysqli_query($connection,$delete);
        if ($run) 
        {
            echo "<script>alert('Delete Successful!')</script>";
            echo "<script>location='brand_view.php'</script>";
        }
    }
 ?>