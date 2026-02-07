<?php
function helloWithVariables() {
    $hello = "Hello, ";
  $world = "world!";
  return $hello . $world;
}

echo helloWithVariables();

function resetCounter( & $c ) {
    $c = 0;
}
$counter = 3;
echo "<br/> $counter <br/> ";        // Displays “3”
resetCounter( $counter );
echo "$counter <br/><br/> ";



$myNumber = 5;
function  &getMyNumber() {
    global $myNumber;
    return $myNumber;
}
$numberRef = &getMyNumber();
$numberRef++;
echo "\$myNumber = $myNumber <br/> ";   // Displays “6”
echo "\$numberRef = $numberRef <br/> ";  // Displays “6”

$myNumber++;

echo "Second time \$myNumber = $myNumber <br/> ";   // Displays “7”
echo "Second time \$numberRef = $numberRef <br/> ";  // Displays “7”


function  &getNumberRef() {
    global $numberRef;
    return $numberRef;
}

$numberRef_Second = &getNumberRef();
$numberRef_Second++;
echo "\$myNumber = $myNumber <br/> ";   // Displays “6”
echo "\$numberRef = $numberRef <br/> ";  // Displays “6”
echo "\$numberRef_Second = $numberRef_Second <br/> ";  // Displays “6”

?>