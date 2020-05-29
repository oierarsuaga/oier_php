<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: #333;
    }

    li {
      float: left;
    }

    li a {
      display: block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    li a:hover:not(.active) {
      background-color: #111;
    }

    .active {
      background-color: #4CAF50;
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
?>

<ul>
  <li><a href='admin_clientes.php'>Home</a></li>
  <li><a href='insert.html'>Crear nuevo cliente</a></li>
  <li><a class="active" href='delete.php'>Eliminar cliente</a></li>
  <li><a href=Login.php>Cerrar sesion</a></li>
</ul>

<?php

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
