<?php 
session_start();
    if (isset($_POST['btnsubmit'])) 
    {
        $name=$_POST['txtname'];
        $_SESSION['studentname']=$name;
        echo "<script>alert('Go to next page')</script>";
        echo "<script>location='session-2.php'</script>";
    }
 ?>
 <form action="session1.php" method="post">
    What is your name:
    <input type="text" name="txtname">
    <input type="submit" name="btnsubmit" value="Send">
 </form>