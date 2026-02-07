<?php
$thetext = $_POST["mytext"];
setcookie("texttokeep",$thetext, time()+10000);
?>
<html>  <head> <title>Cookie Page</title> </head>
<body>
<?php
echo "<p>The post text from cookieStart.php : " . $thetext .
    " we won't be able to pass that on.</p>";
?>
<a href ="next_page.php"> Onto the Next Page</a>
</body>
</html>
