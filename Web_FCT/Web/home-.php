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
  <li><a class="active" href='home-.php'>Home</a></li>
  <li><a href='admin_clientes.php'>Base de datos</a></li>
  <li><a href='insert.html'>Crear nuevo cliente</a></li>
  <li><a href='delete.php'>Eliminar cliente</a></li>
  <li><a href=Login.php>Cerrar sesion</a></li>
</ul>
