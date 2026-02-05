<?php
$connect = mysqli_connect("localhost","root","","abcd");

$id = $_GET['id'];

$query = mysqli_query($connect,
    "SELECT * FROM student WHERE StudentID='$id'"
);

$data = mysqli_fetch_assoc($query);
echo json_encode($data);
