<!DOCTYPE html>https://www.youtube.com/watch?v=-bn51X9YYNs
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="style.css" rel="stylesheet" />
    <title>
    </title>
  </head>
  <body>

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
    $sql = "SELECT * FROM comentarios";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
         echo "<br>  usuario</-->" . $row["usuario"]. ">  <br><br> texto: " . $row["comentario"];
        }
    } else {
        echo "0 results";
    }
    $conn->close();

     ?>


  </body>
</html>
