<?php

//definir los datos
//echo password_hash($password, PASSWORD_DEFAULT)."\n";

echo "login.php";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user =  $_POST['user'];
$password = $_POST['password']

$sql = "SELECT * FROM datos WHERE user = '$user'";


/*$user1 = "koxme";
$user1_password = '$2y$10$WRMJkBqY2yCUeNmd8woEJ.5C8uNsxXxgSQwFhTJu2qP9t9Ar3TMJG';

$user2 = 'peru';
$user2_password2 = '$2y$10$FXGPLwRK8OJZP1cvefrSO.pPZxLG.gxUPFy3NnqI8LVCZ/Tf8X8DG';*/

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if ($user == $row["user"]){
        if (password_verify($password, $row["password"])) {
            echo "OK";
        } else{
            echo "KO";
        }
    } else {
        echo "KO";
    }
} else {
    echo "KO";
}

$conn->close();
/*$user =  $_POST['user'];
$password2 = $_POST['password'];*/



/*if ($user == $user1) {
    if (password_verify($password, $user1_password)) {
        echo "OK";
    } else {
        echo "KO";
    }
}
else if ($user == $user2){
    if (password_verify($password2, $user2_password2)) {
        echo "OK";
    } else{
        echo "KO";
    }
  }*/

/*$user2 = "peru";

// leer desde el formulario
$user = $_GET['user'];
$password = $_GET['password'];

if (($user == $user1 && $password == $hash1) ||
    ($user == $user2 && $password == $user2_password)) {
      echo "OK"; }
    else {
      echo "NO";
    }

    $hash1 = '$2y$10$WRMJkBqY2yCUeNmd8woEJ.5C8uNsxXxgSQwFhTJu2qP9t9Ar3TMJG';
    $hash2 = '$2y$10$FXGPLwRK8OJZP1cvefrSO.pPZxLG.gxUPFy3NnqI8LVCZ/Tf8X8DG';

    if (password_verify($password, $hash1) && $user=='koxme') {
        echo '<h1>hash is valid!</h1>';
    } else {
    if (password_verify($password, $hash2) && $user=='peru')  {
        echo '<h1>hash is valid!</h1>';
    } else {
        echo '<h1>hash is not valid</h1>';
    }
  }
if ($user == koxme ) {
  $hash = '$2y$10$WRMJkBqY2yCUeNmd8woEJ.5C8uNsxXxgSQwFhTJu2qP9t9Ar3TMJG';

if (password_verify('rasmuslerdorf', $hash)) {
    echo '¡La contraseña es válida!';
} else {
    echo 'La contraseña no es válida.';
}
} else {
  if ($user == peru ) {
    $hash = '$2y$10$FXGPLwRK8OJZP1cvefrSO.pPZxLG.gxUPFy3NnqI8LVCZ/Tf8X8DG';

  if (password_verify('rasmuslerdorf', $hash)) {
      echo '¡La contraseña es válida!';
  } else {
      echo 'La contraseña no es válida.';
      }
    }
  }  */
