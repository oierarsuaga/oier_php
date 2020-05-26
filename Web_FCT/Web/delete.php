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
$dbname = "empresa";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//


$sql = "SELECT * FROM clientes";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<br> Nombre-->" . $row["Nombre"] . "<br> Apellido-->" . $row["Apellido"]. "<br> Email-->" . $row["Email"]. "<br> Direccion-->" . $row["Direccion"]. "<br> Fecha_de_nacimiento-->" . $row["Fecha_de_nacimiento"]. "<br> Telefono-->" . $row["Telefono"]. "<br> Num_bancario-->" . $row["Num_bancario"];
        ?>
        <form action="delete_art.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $row["ID"]?>">
            <input type="submit" value="Delete">
        </form>
        <hr/>
        <?php
    }
}
$conn->close();

?>
<br>
<a href="admin_clientes.php">EXIT</a>
