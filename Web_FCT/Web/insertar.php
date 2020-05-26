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

$sql = "INSERT INTO clientes (Nombre, Apellido , Email, Direccion, Fecha_de_nacimiento, Telefono, Num_bancario) values('$Nombre','$Apellido','$Email','$Direccion','$Fecha_de_nacimiento','$Telefono','$Num_bancario')";
//$result = $conn->query($sql);

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
header("Location:admin_clientes.php");
?>
