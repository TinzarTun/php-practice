<?php 
    include('connect.php');

    if (isset($_POST['btnsave'])) 
    {
        $model=$_POST['txtmodel'];
        $brandid=$_POST['cbobrandid'];
        $price=$_POST['numprice'];
        $image=$_FILES['txtimage']['name'];
        $folder="Image/";
        if ($image) 
        {
            $path=$folder.$image;
            $copied=copy($_FILES['txtimage']['tmp_name'], $path);
            if (!$copied) 
            {
                echo "Copy Image Error.";
            }
        }
        $insert=mysqli_query($connection,"INSERT INTO product(ModelNumber, BrandID, Image, Price) VALUES('$model', '$brandid', '$path', '$price')");
        if ($insert) 
        {
            echo "<script>alert('Product Save Successfully.')</script>";
            echo "<script>location='product.php'</script>";
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
    <form action="product.php" method="post" enctype="multipart/form-data">
 		
        <label>Model Number</label>
        <input type="text" name="txtmodel" required>
        <br>

        <label>Brand Name</label>
        <select name="cbobrandid">
            <option>Choose Brand</option>
            <?php 
                $select=mysqli_query($connection,"SELECT * FROM brand");
                $count=mysqli_num_rows($select);
                for ($i=0; $i < $count; $i++) 
                { 
                    $data=mysqli_fetch_array($select);
                    $BrandID=$data['BrandID'];
                    $BrandName=$data['BrandName'];
                    echo "<option value='$BrandID'>$BrandName</option>";
                }
             ?>
        </select>
        <br>

        <label>Image</label>
        <input type="file" name="txtimage" required>
        <br>

        <label>Price</label>
        <input type="number" name="numprice" required>
        <br>

        <input type="submit" name="btnsave" value="Save">
        <input type="reset" name="btncancel" value="Cancel">

    </form>

    <!-- Product List -->
    <fieldset>
        <LEGEND>Product List</LEGEND>
        <table border="1" width="100%">
            <tr>
                <th>Product ID</th>
                <th>Image</th>
                <th>Model Number</th>
                <th>Brand Name</th>
                <th>Price</th>
            </tr>
            <?php 
                $select=mysqli_query($connection,"SELECT * FROM product p, brand b WHERE p.BrandID=b.BrandID");
                $count=mysqli_num_rows($select);
                for ($i=0; $i < $count; $i++) 
                { 
                    $data=mysqli_fetch_array($select);
                    $BrandName=$data['BrandName'];
                    $ProductID=$data['ProductID'];
                    $ModelNumber=$data['ModelNumber'];
                    $Image=$data['Image'];
                    $Price=$data['Price'];

                    echo "<tr>";
                        echo "<td>$ProductID</td>";
                        echo "<td><img src='$Image' width='100px' height='100px'></td>";
                        echo "<td>$ModelNumber</td>";
                        echo "<td>$BrandName</td>";
                        echo "<td>$Price MMK</td>";
                    echo "</tr>";
                }
             ?>
        </table>
    </fieldset>
 </body>
 </html>