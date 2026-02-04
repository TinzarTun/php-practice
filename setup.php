<?php 
    $connection=mysqli_connect("localhost","root","","abcd");

    $dropuser="DROP TABLE user";
    $querydrop=mysqli_query($connection,$dropuser);

    $dropcustomer="DROP TABLE customer";
    $querydrop=mysqli_query($connection,$dropcustomer);

    $createcustomer="CREATE TABLE customer
    (
        User_ID int Primary Key AUTO_INCREMENT,
        User_Name VARCHAR(30),
        Email VARCHAR(30),
        Password VARCHAR(50)
    )";
    $query=mysqli_query($connection,$createcustomer);
    if ($query) 
    {
        echo "customer Table Created.";
    }
    else
    {
        echo mysqli_error($connection);
    }


    $create="CREATE TABLE user
    (
        First_Name VARCHAR(30),
        Last_Name VARCHAR(30)
    )";
    $query=mysqli_query($connection,$create);
    if ($query) 
    {
        echo "User Table Created.";
    }
    else
    {
        echo mysqli_error($connection);
    }

    $queryinsert=mysqli_query($connection,"INSERT INTO user VALUES('Rosella','Kelvinno')");
    if ($queryinsert) 
    {
        echo "User Data Inserted.";
    }
    else
    {
        echo mysqli_error($connection);
    }
 ?>