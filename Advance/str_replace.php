<?php
$myString = "It was the best of times, it was the worst of times,";
echo "Before replace: " .$myString ."<br />";
echo str_replace( "times", "bananas", $myString, $num );
echo "<br />The text was replaced $num times. <br/> ";

?>