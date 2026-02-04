<?php 
    if (isset($_POST['btnsend'])) 
    {
        $name=$_POST['txtname'];
        setcookie("username",$name,time()+60);
    }
 ?>

 <!DOCTYPE html>
 <html>
 <head>
    <title></title>
 </head>
 <body>
    <form action="cookie-1.php" method="post">
        Name: <input type="text" name="txtname">
        <br>
        <input type="submit" name="btnsend" value="Send">
    </form>
    <a href="cookie-2.php">Go to Cookie2 Page</a>
 </body>
 </html>