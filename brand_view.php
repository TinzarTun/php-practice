<?php 
    include('connect.php');
 ?>

 <!DOCTYPE html>
 <html>
 <head>
    <title></title>
 </head>
 <body>
    <form action="brand_view" method="post">
        <table border="1" width="50%">
            <tr>
                <th>Brand ID</th>
                <th>Brand Name</th>
                <th>Action</th>
            </tr>
            <?php 
                $select=mysqli_query($connection,"SELECT * FROM brand");
                $count=mysqli_num_rows($select);
                for ($i=0; $i < $count; $i++) 
                { 
                    $data=mysqli_fetch_array($select);
                    $bid=$data['BrandID'];
                    $bname=$data['BrandName'];
                    echo "<tr>";
                        echo "<td>$bid</td>";
                        echo "<td>$bname</td>";
                        echo "<td>
                            <a href='brand_update.php?bid=$bid'>Update</a> |
                            <a href='brand_delete.php?bid=$bid'>Delete</a>
                        </td>";
                    echo "</tr>";
                }
             ?>
        </table>
    </form>
 </body>
 </html>