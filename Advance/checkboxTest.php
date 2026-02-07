<?php

if( isset($_POST['dinner'])) {
    $dinner = $_POST['dinner'];
    foreach ($dinner as $key => $value)
        echo "Dinner is <input type='text' value='$value'> 
   <br/>";
}else{
    echo "No params";
    header( "Location:radioForm.php" );
}

?>