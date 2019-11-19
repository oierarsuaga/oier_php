<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_POST['id'];
$title = $_POST['title'];
$info =  $_POST['info'];
$img = $_POST['img'];

$sql = "UPDATE blog SET title = '$title', info = '$info' , img = '$img' WHERE id = '$id'";

/*echo $sql;
$result = $conn->query($sql);*/

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

header("Location:admin.php");


?>
