<?php
/* Script name: sessionTest2.php
* Description: Gets a variable from an existing session.
*/
session_start();
?>
<html>
    <head>
        <title>Testing Sessions page 2</title>
    </head>
    <body>
        <?php
        $session_var = $_SESSION['session_var'] ?? 'Session not set';
        $form_var    = $_POST['form_var'] ?? 'Form not submitted';

        echo "Session_var = $session_var<br/>";
        // Session_var = testing the session
        echo "Form_var = $form_var<br/>";            
        // Form_var = testing_var
        ?>
    </body>
</html>