<?php
$myString = "Hello, world!";
echo substr( $myString, 0, 5 ) . "<br />";
// Displays ‘Hello’

echo substr( $myString, 7 ) . " <br/> ";


$myString = "I say, nay, nay, and thrice nay!";
echo substr_count( $myString, "nay" ) . " <br/> ";
echo substr_count( $myString, "nay",9 ) . " <br/> ";
echo substr_count( $myString, "nay",9,6 ) . " <br/> ";
?>