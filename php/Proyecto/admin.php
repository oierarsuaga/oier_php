<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//
$sql = "SELECT * FROM blog";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
     echo "<br> id: " . $row["id"].  "<br> title: " . $row["title"]. "<br> <img width='20%' src=imagenes/" . $row["img"] .">  <br> info: " . $row["info"];
?>


<form action="update.php" method="POST">
  id:<br>
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
</form>
<?php

    }
} else {
    echo "0 results";
}

echo "<br> <a href='insert.html'><button> Insert </button></a> </br>";
echo "<br> <a href='delete.php'><button> Delete </button></a> </br>";
/*echo "<br> <a href='update.html'><button> Update </button></a> </br>";*/
$conn->close();
 ?>
