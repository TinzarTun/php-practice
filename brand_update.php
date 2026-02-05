<?php 
    include('connect.php');
    if (isset($_REQUEST['bid'])) 
    {
        $BrandID=$_REQUEST['bid'];
        $select=mysqli_query($connection,"SELECT * FROM brand WHERE BrandID='$BrandID'");
        $data=mysqli_fetch_array($select);
        $bn=$data['BrandName'];
    }
    if (isset($_POST['btnupdate'])) 
    {
        $bid=$_POST['txtID'];
        $bname=$_POST['txtbrandname'];
        $update="UPDATE brand SET BrandName='$bname' WHERE BrandID='$bid'";
        $run=mysqli_query($connection,$update);
        if ($run) 
        {
            echo "<script>alert('Update Successful!')</script>";
            echo "<script>location='brand_view.php'</script>";
        }
        else
        {
            echo mysqli_error($connection);
        }
    }
 ?>

 <!DOCTYPE html>
 <html>
 <head>
    <title></title>
 </head>
 <body>
    <form action="brand_update.php" method="post">
 		
        <input type="hidden" name="txtID" value="<?php echo $_REQUEST['bid'] ?>">

        <label>Brand Name :</label>
        <input type="text" name="txtbrandname" required value="<?php echo $bn ?>">
        <br>

        <input type="submit" name="btnupdate" value="Update">
        <input type="reset" name="btndelete" value="Delete">

    </form>
 </body>
 </html>