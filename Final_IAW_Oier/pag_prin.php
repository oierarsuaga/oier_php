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
$sql = "SELECT * FROM datos";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
     echo "<br>  <h1>TITULO</</h1>--><h1>" . $row["title"]. "</h1><br> <img width='33%' src=imagenes/" . $row["img"] .">  <br><br> Informacion: " . $row["info"];
     echo "<br>";
    }
} else {
    echo "0 results";
}

$sql = "SELECT * FROM comentario";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
     echo "<br>  usuario:</-->" . $row["username"]. "-->   texto: " . $row["comentario"];
    }
} else {
    echo "0 results";
}


$conn->close();
?>
  <body>
    <br>
    <br>
    <br><a href='login_signin.php'> Login </a></br>
  </body>
</html>
