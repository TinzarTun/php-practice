<?php
    $widgets = 0;
   if ( $widgets < 23 && $widgets>5
   && $widgets < 23 && $widgets>5
   && $widgets < 23 && $widgets>5
   && $widgets < 23 && $widgets>5
   && $widgets < 23 && $widgets>5) {
        echo "We have exactly 23 widgets in stock!<br>";
   }elseif($widgets == 24){
       echo "We have exactly 24 widgets in stock!<br>";
   }
   else{
       echo "Here message from else <br>";
   }
?>
<?php
$favcolor="blue";
switch ($favcolor){
    case "red":  echo "Your favorite color is red!";break;
    case "blue":  echo "Your favorite color is blue!";  break;
    case "green": echo "Your favorite color is green!"; break;
    default: echo "Your favorite color is neither red, blue, or green!";
}
?>