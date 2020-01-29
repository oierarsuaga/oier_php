<?php include "config.php";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>
    </title>
  </head>
  <body>
    <?php
    $consulta1 = mysqli_query($conexion, "SELECT * from comentarios")or die (mysqli_error($conexion));
    $consulta2 = mysqli_query($conexion, "SELECT usuario from datos")or die (mysqli_error($conexion));
    $row2 = mysqli_fetch_assoc($consulta2);

    while($row = mysqli_fetch_assoc($consulta1)){
      echo "<div class='comentarios'>".$row['usuario']."<br><br>
      ".$row['comentario']."

      </div>";
    }
echo "<br><br><br><br><br><br><br><br><br><br><br>";
echo $row2['usuario'];
echo "<br><br><br><br><br><br><br><br><br><br><br>";
     ?>
<certer><form action="insert_com.php" method="post">
       <input type="text" name="usuario" placeholder=<?php echo $row2['usuario'] ?>><br><br>
       <input type="text" name="comentario" placeholder="comentario"><br><br>
       <input type="submit" name="enviar" value="Enviar comentario">
     </form></certer>

<br> <a href="logout.php"> logout </a> </br>


  </body>
</html>
