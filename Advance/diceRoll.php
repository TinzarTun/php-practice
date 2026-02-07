<?php
$num = $_GET ["num"];
$faces = $_GET ["faces"];
$total = 0;
$roll = 0;
for ($i = 0; $i < $num; $i++) {
    $roll = (rand() %$faces) +1;
    echo "<p>Dice roll ”. ($i+1).” is $roll.</p>";
             $total += $roll;
    }
echo "<p>Total roll is $total<p>"
?>