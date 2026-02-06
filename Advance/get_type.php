<html>
<body>
<?php
$test_var;
// Declares the $test_var variable without initializing it
echo gettype( $test_var ) . "<br/> ";    // Displays “NULL”
$test_var = 15;
echo gettype( $test_var ) . "<br/>";     // Displays “integer”
$test_var = 8.23;
echo gettype( $test_var ) . "<br/>";     // Displays “double”
$test_var = "Hello, world!";
echo gettype( $test_var ) . "<br/>";      // Displays “string”

$numString="12";
$numInt = (int) $numString;
$numSum = $numInt + 8;
echo "What? =>".$numSum;

echo "<br>".is_string($numString);
?>
</body>
</html>
