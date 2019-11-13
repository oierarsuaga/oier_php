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
//
$id =  $_POST['id'];
$title = $_POST['title'];
$info =  $_POST['info'];
$img = $_POST['img'];

$sql = "INSERT INTO 'blog' ('id', 'title', 'info', 'img') values(['$id'],['$title'],['$info'],['$img'])";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form action="insert.php" method="POST">
      id:<br>
      <input type="text" name="id" value="">
      <br>
      title:<br>
      <input type="text" name="title" value="">
      <br>
      info:<br>
      <input type="text" name="info" value="">
      <br>
      img:<br>
      <input type="text" name="img" value="">
      <br><br>
      <input type="submit" value="Insert">
    </form>

  </body>
</html>
