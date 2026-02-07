<?php
/* Script name: sessionTest1.php
* Description: Starts a session. Saves a session variable.
*/
session_start();
$_SESSION['session_var'] = "testing the session";
?>
<html>
    <head>
        <title>Testing Sessions page 1</title>
    </head>
    <body>
        <p>This is a test of the sessions feature.</p>
        <form action="sessionTest2.php" method="POST">
            <input type="text" name="form_var" value="testing_var">
            <input type="submit" name="submit" value="Go to Next Page">
        </form>
    </body>
</html>