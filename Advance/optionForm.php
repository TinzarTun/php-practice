<html>
<head>Select Test</head>
<body>
<form action="optionTest.php" method="post">
    <?php    $dinner1="chicken";
    $dinner2="fish";
    echo "<select name='dinner'>
                      <option>Please choose one option</option>
                     <option>$dinner1</option>
                     <option>$dinner2</option>
         </select>";
    ?>
    <input type="submit" name="Submit">
</form>   </body> </html>
