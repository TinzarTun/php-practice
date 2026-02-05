<?php 
    include('connect.php');

    if (isset($_POST['btnsave'])) 
    {
        $bname=$_POST['txtbrandname'];

        $select=mysqli_query($connection,"SELECT * FROM brand WHERE BrandName='$bname'");
        $count=mysqli_num_rows($select);
        if ($count==0) 
        {
            $insert=mysqli_query($connection,"INSERT INTO brand(BrandName) values('$bname')");
            if ($insert) 
            {
                echo "<script>alert('Save!')</script>";
                echo "<script>location='brand_register.php'</script>";
            }
            else
            {
                echo mysqli_error($connection);
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
    <form action="brand_register.php" method="post">
 		
        <label>Brand Name :</label>
        <input type="text" name="txtbrandname" required>
        <br>

        <input type="submit" name="btnsave" value="Save">
        <input type="reset" name="btndelete" value="Delete">

    </form>
 </body>
 </html>