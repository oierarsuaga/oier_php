<?php

// Read from the formulary (login.html)
// user / password
$user = $_POST["user"];
$user_password = $_POST["password"];

/*
echo $user . "<br>";
echo $password;
*/
// connect to mysql
// http://php.net/manual/es/mysqli.construct.php
// https://www.w3schools.com/php/php_mysql_connect.asp

$servername = "localhost";
$username = "root";
$password = "";
//$password = "";
$db = "login";

// Create connection
$mysqli = new mysqli($servername, $username, $password, $db);

// Check connection
if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

// select from user where ....
$query = "SELECT usuario FROM datos WHERE usuario='$user' AND password='$user_password'";

//echo $query;

$result = $mysqli -> query($query);

//var_dump($result);

if ($result->num_rows > 0) {
    // session
    session_start();
    $_SESSION['x'] = 1;
    header('Location: '."admin.php");

    //header('Location: '."listar.php");
} else {
    //echo "Login KO";
    header('Location: '."login.html");
}
