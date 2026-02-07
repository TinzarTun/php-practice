<?php
printf( "%d times %d is %d.<br/>  ", 5, 6, 5*6 );

$myNumber = 123.45;
printf( "Binary: %b <br/>  ", $myNumber );           //1111011
printf( "Character: %c <br/>  ", $myNumber );     //{
printf( "Digit: %d <br/>  ", $myNumber );        //123
printf( "Scientific: %e <br/>  ", $myNumber );       //1.234500e+2
printf( "Float: %f <br/>  ", $myNumber );             //123.450000
printf( "Octal: %o <br/>  ", $myNumber );           //173
printf( "String: %s <br/>  ", $myNumber );           //123.45
printf( "Hex (lower case): %x <br/>  ", $myNumber );    //7b
printf( "Hex (upper case): %X <br/>  ", $myNumber );   //7B
?>