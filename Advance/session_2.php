<?php
session_start ( ) ;
?>
<html>    <head>   <title>Session Start Page</title>     </head>
<body>
<?php
$mytext = $_POST["mytext"];
echo "<p>The post text  is $mytext and we’ll register that in a session </p>";
$_SESSION["mytext"] = $mytext ;
?>
<a href = "session_next_page.php"> Onto the next page</a>
</body>
</html>
