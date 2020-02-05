<?php

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

  $id = $_POST['id'];
  $username = $_POST['username'];
  $comentario =  $_POST['comentario'];


/*  $sql = "SELECT * FROM comentario";
  $result = $conn->query($sql);
  if ($result->num_rows  > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        $row["username"] == $username
}}
else {
  $sql = "UPDATE comentario SET comentario = '$comentario' WHERE id = '$id' AND username ='$username'";
}*/





  $sql = "UPDATE comentario SET comentario = '$comentario' WHERE id = '$id' AND username ='$username'";



/*echo $sql;
$result = $conn->query($sql);*/

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
};

header("Location:admin_user.php");


?>
