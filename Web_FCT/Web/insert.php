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

  $id = $_POST['id'];
  $Nombre = $_POST['Nombre'];
  $Apellido =  $_POST['Apellido'];
  $Email = $_POST['Email'];
  $Direccion = $_POST['Direccion'];
  $Fecha_de_nacimiento = $_POST['Fecha_de_nacimiento'];
  $Telefono = $_POST['Telefono'];
  $Num_bancario = $_POST['Num_bancario'];

  $sql = "INSERT INTO clientes (Nombre, Apellido , Email, Direccion, Fecha_de_nacimiento, Telefono, Num_bancario) values('$Nombre','$Apellido','$Email''$Direccion','$Fecha_de_nacimiento','$Telefono''$Num_bancario')";
  $result = $conn->query($sql);

  /*if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }*/
  //header("Location:admin_clientes.php");
  ?>

  <body>

    <form action="insert.php" method="POST">
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
    <br>
    <a href="admin.php">EXIT</a>
  </body>
</html>
