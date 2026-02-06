<html>
<body>
        <?php
            $x = 2;
            $y = 3;
            echo ( ($x > 1) && ($x < 5) ) . "<br/>"; 		// Displays 1 (true)
            echo ( ($x == 2) or ($y == 0) ) . "<br/>"; 	// Displays 1 (true)
            echo ( ($x == 2) xor ($y == 3) ) . "<br/>";
 // Displays “” (false) because both expressions are true
            echo ( !($x == 5 ) ) . "<br/>"; 	// Displays 1 (true) because
                                                        // $x does not equal 5
        ?>
    </body></html>
