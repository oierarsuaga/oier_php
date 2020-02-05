<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
    a:link, a:visited {
  background-color: #f44336;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: red;
}
    </style>
  </head>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "assignment";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: '."login_signin.php");
}

$sql = "SELECT * FROM comentario";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. "<br> username: " . $row["username"]. "<br> comentario:" . $row["comentario"];
        ?>
        <form action="delete.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $row["id"]?>">
            <input type="hidden" name="username" value="<?php echo $row["username"]?>">
            <input type="submit" value="Delete">
        </form>
        <hr/>
        <?php
    }
}
$conn->close();

?>
<br>
<a href="admin_user.php">EXIT</a>
