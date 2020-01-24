<?php include "config.php";?>
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
    $consulta1 = mysqli_query($conexion, "SELECT * from comentarios")or die (mysqli_error($conexion));
    while($row = mysqli_fetch_assoc($consulta1)){
      echo "<div class='comentarios'>".$row['usuario']."<br><br>
      ".$row['comentario']."

      </div>";
    }

     ?>

     <certer><form action="" method="post">
       <input type="text" name="usuario" placeholder="usuario"><br><br>
       <input type="text" name="comentario" placeholder="comentario"><br><br>
       <input type="submit" name="enviar" value="Enviar comentario">
     </form></certer>

     <?php
     if (isset($_POST['enviar'])) {
       $usuario = utf8_decode(mysqli_real_escape_string($conexion, $_POST['usuario']));
       $comentario = utf8_decode(mysqli_real_escape_string($conexion, $_POST['comentario']));
       if ($usuario == '' or $comentario == ''){
         echo "Lo sentimos, pero no puede dejar los campos sin rellenar.";
       }
       else {
         $insertar = mysqli_query($conexion, "INSERT INTO comentarios(usuario, comentario) VALUES('".$usuario."', '".$comentario."')")or die(mysqli_error($conexion));
         echo "El comentario ha sido introducido correctamente.";
       }
     }


      ?>


  </body>
</html>
