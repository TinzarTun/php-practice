<?php
printf( "%'Z6d <br/> ", 123 );   // Displays “000123”
printf( "%'$6d <br/> ", 4567 );   // Displays “004567”
printf( "%06d <br/> ", 12345 );   // Displays “123456”
printf( "%06d", 12345678 ); //  displays   “12345678” , not   “345678” .

printf( "%'x15s <br/>", "Hi" );
printf( "%'#15s <br/>", "Hello" );
printf( "%'$-15s <br/>", "Hello, world!" ) ."<br/>";

echo str_pad( "Hello, world!", 20 ) ."<br/>";
echo str_pad( "Hello, world!", 20,"*" ) ."<br/>";
echo str_pad( "Hello, world!", 20,"123" ) ."<br/>";
?>