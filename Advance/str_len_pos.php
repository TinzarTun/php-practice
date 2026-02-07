<?php
echo strlen("Hello") ."<br/>";  // 5
echo strpos("Hello world!","o"). " <br/> ";

$myString = "Hello, world!";

echo strpos( $myString, "wor" ). " <br/> ";     // Displays ‘7’

echo strpos( $myString, "xyz" ). " <br/> ";      // Displays ‘’ (false)

echo strpos( $myString, "o" ) . " <br/> ";        // Displays ‘4’

echo strpos( $myString, "o", 5 ) . " <br/>  ";   // Displays ‘8’

echo strrpos ( $myString, "o" ) . " <br/> ";    // Displays ‘8’


$myString = "Hello, world! PHP";
     $pos = 0;

while ( ( $pos = strpos( $myString, "l", $pos ) ) !== false ) {
    echo "The letter ‘l’ was found at position: $pos <br/> ";
  $pos++;
}

echo strstr( $myString, "lo" ) . "  <br/>  ";
echo strstr( $myString, "lo", true ) . "  <br/>  ";

echo strpbrk( $myString, "abcdef" );
?>