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

session_start(); if($_SESSION['username']==$username){
  $id = $_POST["id"];
  $sql = "DELETE FROM comentario WHERE id=$id and username=$_SESSION";
  $result = $conn->query($sql);
  header("Location:admin_user.php");
}

/*header("Location:admin_user.php");*/
?>
