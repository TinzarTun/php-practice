<?php
define("RATE", 1.52);

$US_dollars = 20.0;
$CA_dollars = $US_dollars * RATE;

echo "Rate: " . RATE;
echo "<br>Canadian dollars: " . $CA_dollars;
echo "<br>Type of US dollars: ";
var_dump($US_dollars);
?>
