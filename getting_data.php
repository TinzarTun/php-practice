<?php 
    $connection=mysqli_connect("localhost","root","","abcd");
 ?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    User:
    <select>
        <option>Choose User</option>
        <?php 
            $select="SELECT * FROM user";
            $query=mysqli_query($connection,$select);

            $count=mysqli_num_rows($query);

            for ($i=0; $i < $count ; $i++) 
            { 
                $data=mysqli_fetch_array($query);
                $fname=$data['First_Name'];
                $lname=$data['Last_Name'];
                echo "<option>$fname $lname</option>";
            }
         ?>
    </select>
</body>
</html>