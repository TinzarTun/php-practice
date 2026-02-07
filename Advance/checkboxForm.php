<html>
<head>Radio Button Test</head>
<body>
<form action="checkboxTest.php" method="post">
    <?php
    $dinner1="chicken";
    $dinner2="fish";
    echo "<input type='checkbox' name='dinner[ ]' value='$dinner1'>$dinner1
            <input type='checkbox' name='dinner[ ]' value='$dinner2'>$dinner2";
 ?>
    <input type="submit" name="Submit">
</form>
</body>
</html>
