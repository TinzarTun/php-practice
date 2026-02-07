<?php
printf( "%f <br/> ", 123.4567 ) ."<br/>";      // Displays “123.456700”
printf( "%.2f <br/> ", 123.4567 ) ."<br/>";  // Displays “123.46”
printf( "%.0f <br/> ", 123.4567 ) ."<br/>";  // Displays “123”
printf( "%.10f <br/> ", 123.4567 ) ."<br/>"; // Displays “123.4567000000”
printf( "%'x12.2f <br/> ", 123.4567 ) ."<br/>"; // Displays “000000123.46”
printf( "%12.4f <br/> ", 123.4567 ) ."<br/>";  // Displays “    123.4567”

$myString = "       What a lot of space!          ";
echo " <pre> ";
echo "|" . trim( $myString ) . "|<br/>";  // Displays “|What a lot of space!|”
echo "|" . ltrim( $myString ) . "|<br/>";
// Displays “|What a lot of space!         |”;
echo "|" . rtrim( $myString ) . "|<br/>";
// Displays “|         What a lot of space!|”;
echo " < /pre > ";

?>