<?php 
session_start();
    $newname=$_SESSION['studentname'];
    echo "<h1>Welcome $newname</h1>";
 ?>