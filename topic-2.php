<?php 
    if (isset($_POST['btnsave']))
    {
        $Name=$_POST['txtname'];
        $Email=$_POST['txtemail'];
        $Password=$_POST['txtpassword'];
        $Township=$_POST['cbotownship'];
        $Gender=$_POST['rdogender'];

        echo "You enter name as $Name <br>";
        echo "Your email is $Email <br>";
        echo "Your password is $Password <br>";
        echo "You live in $Township <br>";
        echo "You are $Gender <br>";

        $Subject=$_POST['chksubject'];
        $count=count($Subject);
        for ($i=0; $i < $count ; $i++) 
        { 
            echo "You choose the subject;" .$Subject[$i]. "<br>";
        }
    }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Topic 2</title>
</head>
<body>
    <form action="topic2.php" method="post" enctype="multipart/form-data">
        Name: <input type="text" name="txtname" placeholder="Please enter your Name"> <br>
        Email: <input type="Email" name="txtemail" placeholder="Please enter your Email"> <br>
        Password: <input type="Password" name="txtpassword"> <br>
        Township:
        <select name="cbotownship">
            <option>Yangon</option>
            <option>Mandalay</option>
            <option>Naypyitaw</option>
        </select> <br>
        Gender: 
        <input type="radio" name="rdogender" value="Male">Male
        <input type="radio" name="rdogender" value="Female">Female <br>
        Subject:
        <input type="checkbox" name="chksubject[]" value="PHP">PHP
        <input type="checkbox" name="chksubject[]" value="Java">Java
        <input type="checkbox" name="chksubject[]" value="C#">C#
        <input type="checkbox" name="chksubject[]" value="C++">C++
        <input type="checkbox" name="chksubject[]" value="Python">Python <br>

        <input type="submit" name="btnsave" value="Save">
        <input type="reset" name="btncancel" value="Cancel">
    </form>
</body>
</html>