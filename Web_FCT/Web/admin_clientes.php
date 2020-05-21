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
include('include/db_con.php');
//session_start();
//if (!isset($_SESSION['username'])) {
//    header('Location: '."login_signin.php");
//}
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



$sql = "SELECT * FROM clientes";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
     echo "<br> Nombre-->" . $row["Nombre"] . "<br> Apellido-->" . $row["Apellido"]. "<br> Email-->" . $row["Email"]. "<br> Direccion-->" . $row["Direccion"]. "<br> Fecha de nacimiento-->" . $row["Fecha de nacimiento"]. "<br> Telefono-->" . $row["Telefono"]. "<br> Num_bancario-->" . $row["Num_bancario"];

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
  <input type="text" name="Fecha de nacimiento" value="<?php echo $row["Fecha de nacimiento"]?>">
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

/*echo "<br> <a href='insert.html'><button> Insert </button></a> </br>";
echo "<br> <a href='delete.php'><button> Delete </button></a> </br>";
echo "<br> <a href='pagina.html'><button> Cerrar sesion </button></a> </br>";



$sql = "SELECT * FROM comentarios";
$result = $conn->query($sql);
if ($result->num_rows  > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
     echo "<br>  usuario:</-->" . $row["username"]. "-->   texto: " . $row["comentario"];
?>

     <form action="update.php" method="POST">
       <input type="text" name="id" value="<?php echo $row["id"]?>">
       <br>
       username:<br>
       <input type="text" name="username" value="<?php echo $row["username"]?>">
       <br>
       comentario:<br>
       <input type="text" name="comentario" value="<?php echo $row["comentario"]?>">
       <br>
       <input type="submit" value="Update">
     </form>
<?php
     }
} else {
    echo "0 results";
}


$conn->close();
 ?>
<body>
  <br><a href='registration.php'> Insert_comentarios </a></br>
  <br><a href='adminpanal.php'> Eliminar_comentarios </a></br>
  <br><a href='pag_prin.php'> Cerrar sesion </a></br>
</body>





<?php
//session_start();
//if (!isset($ldap_dn["username"])) {
//    header('Location: '."Login.php");
//}

?>
*/
