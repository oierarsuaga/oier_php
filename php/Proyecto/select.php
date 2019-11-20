<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
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
$sql = "SELECT * FROM blog";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
     echo "<br>  <h1>title</</h1>--><h1>" . $row["title"]. "</h1><br> <img width='33%' src=imagenes/" . $row["img"] .">  <br> info: " . $row["info"];
    }
} else {
    echo "0 results";
}
$conn->close();
?>
  <body>
    <br><a href='pagina.html'> Login </a></br>
  </body>
</html>
