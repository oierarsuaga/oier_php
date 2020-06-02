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
    input[type=text] {
      width: 40%;
      padding: 12px 20px;
      margin: 8px 0;
      box-sizing: border-box;
      border: 1px solid #555;
      outline: none;
    }

    input[type=text]:focus {
      background-color: lightblue;
    }
    </style>
  </head>

<?php
include('include/db_con.php');
/*session_start();
if (!isset("uid=".$_POST["username"].",dc=example,dc=com")) {
    header('Location: '."Login.php");
}*/
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
?>
<ul>
  <li><a href='home-.php'>Home</a></li>
  <li><a class="active" href='admin_clientes.php'>Base de datos</a></li>
  <li><a href='insert.html'>Crear nuevo cliente</a></li>
  <li><a href='delete.php'>Eliminar cliente</a></li>
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
<form action="update.php" method="POST">
  <br>
  <input type="text" name="id" value="<?php echo $row["ID"]?>">
  <br>
  Nombre:<br>
  <input type="text" name="Nombre" value="<?php echo $row["Nombre"]?>">
  <br>
  Apellido:<br>
  <input type="text" name="Apellido" value="<?php echo $row["Apellido"]?>">
  <br>
  Email:<br>
  <input type="text" name="Email" value="<?php echo $row["Email"]?>">
  <br>
  Direccion:<br>
  <input type="text" name="Direccion" value="<?php echo $row["Direccion"]?>">
  <br>
  Fecha de nacimiento:<br>
  <input type="text" name="Fecha_de_nacimiento" value="<?php echo $row["Fecha_de_nacimiento"]?>">
  <br>
  Telefono:<br>
  <input type="text" name="Telefono" value="<?php echo $row["Telefono"]?>">
  <br>
  Num bancario:<br>
  <input type="text" name="Num_bancario" value="<?php echo $row["Num_bancario"]?>">
  <br>
  <input type="submit" value="Update">
</form>
<br>
<?php

    }
} else {
    echo "0 results";
}
