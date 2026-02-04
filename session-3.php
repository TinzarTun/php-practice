<?php 
session_start();
unset($_SESSION['studentname']);
session_destroy();
    echo $_SESSION['studentname'];
 ?>