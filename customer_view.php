<?php 
    include('connect.php');
 ?>
 <form action="#" method="post">
    <table border="1" width="50%">
        <tr>
        <th>UserID</th>
        <th>UserName</th>
        <th>Email</th>
        <th>Password</th>
        <th>Action</th>
        </tr>
        <?php 
            $select=mysqli_query($connection,"SELECT * FROM customer");
            $count=mysqli_num_rows($select);
            for ($i=0; $i < $count; $i++) 
            { 
                $data=mysqli_fetch_array($select);
                $cid=$data['User_ID'];
                $cn=$data['User_Name'];
                $em=$data['Email'];
                $pa=$data['Password'];
                echo "<tr>";
                    echo "<td>$cid</td>";
                    echo "<td>$cn</td>";
                    echo "<td>$em</td>";
                    echo "<td>$pa</td>";
                    echo "<td>
                        <a href='customer_update.php?cid=$cid'>Update</a> |
                        <a href='customer_delete.php?cid=$cid'>Delete</a>
                    </td>";
                echo "</tr>";
            }
         ?>
    </table>
 </form>