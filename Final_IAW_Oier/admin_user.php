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
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: '."login_signin.php");
}
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
?>
<div>
	<div>
	<form action="login_signin.php" method="POST">
<?php session_start(); if(isset($_SESSION['username'])){ echo $_SESSION['username']; } ?>
		</form>
	</div>
</div>
<?php
$sql = "SELECT * FROM datos";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
     echo "<br> <h1>title</</h1>--><h1>" . $row["title"]. "</h1><br> <img width='33%' src=imagenes/" . $row["img"] .">  <br> info: " . $row["info"];


?>


<!--<form action="update.php" method="POST">
  <input type="text" name="id" value="<?php echo $row["id"]?>">
  <br>
  title:<br>
  <input type="text" name="title" value="<?php echo $row["title"]?>">
  <br>
  info:<br>
  <input type="text" name="info" value="<?php echo $row["info"]?>">
  <br>
  img:<br>
  <input type="text" name="img" value="<?php echo $row["img"]?>">
  <br><br>
  <input type="submit" value="Update">
</form>-->
<?php

    }
} else {
    echo "0 results";
}

/*echo "<br> <a href='insert.html'><button> Insert </button></a> </br>";
echo "<br> <a href='delete.php'><button> Delete </button></a> </br>";
echo "<br> <a href='pagina.html'><button> Cerrar sesion </button></a> </br>";*/



$sql = "SELECT * FROM comentario";
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
