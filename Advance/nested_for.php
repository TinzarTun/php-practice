<?php
for($i=1;$i<=9;$i++) {
    echo "\nMultiply by $i <br/>";
    for($j=1;$j<=9;$j++) {
        $result = $i * $j;
        echo "$i x $j = $result<br/>";
    }
}
?>