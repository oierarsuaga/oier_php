<?php
//if (isset($_POST['enviar'])) {
  //$usuario = utf8_decode(mysqli_real_escape_string($conexion, $_POST['usuario']));
  //$comentario = utf8_decode(mysqli_real_escape_string($conexion, $_POST['comentario']));


//  if ($usuario == '' or $comentario == ''){
  //  echo "Lo sentimos, pero no puede dejar los campos sin rellenar.";
  //}
  //else {
  //  $insertar = mysqli_query($conexion, "INSERT INTO DISTINCT comentarios(usuario, comentario) VALUES('".$usuario."', '".$comentario."')")or die(mysqli_error($conexion));
  //  echo "El comentario ha sido introducido correctamente.";
//  }
//}

$usuario = $_POST['usuario'];
$comentario =  $_POST['comentario'];

$sql = "INSERT INTO comentarios(usuario, comentario) values('".$usuario."', '".$comentario."')";
$result = $conn->query($sql);

/*if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}*/
header("Location:admin.php");
 ?>
