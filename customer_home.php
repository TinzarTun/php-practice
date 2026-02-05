<?php 
    include('connect.php');
 ?>
 <!DOCTYPE html>
 <html>
 <head>
    <title></title>
 </head>
 <body>
    <table>
        <tr>
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

                    echo "<td>
                            <img src='$Image' width='300px' height='300px'>
                            <br>
                            Brand : $BrandName
                            <br>
                            Model Number : $ModelNumber
                            <br>
                            Price : $Price MMK
                            <br>
                            <a href='#'>Add to Cart</a>
                        </td>";
                }
             ?>
        </tr>
    </table>
 </body>
 </html>