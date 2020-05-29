session_start();
	if (isset($_POST['username'],$_POST['password']))
			 {
							$username=$_POST['username'];
							$password=$_POST['password'];
							$_SESSION['username']=$_POST['username'];
								 if (empty($username) || empty($password))
								 {
										$error = 'Hey All fields are required!!';
									}

				 else {
      				 $login="select * from users where user_name='".$username."' and user_password ='".$password."'";
      				 $result=mysqli_query($con,$login);


      				 if (password_verify($pass, $hash)) {
      					 header('Location:admin_user.php');

      				              }
      				 else {
      				     // Invalid credentials
      				     echo "Error!";
      				       }
							 }
	        }


--------

include('include/db_con.php');
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: '."login.php");
}

---------

<div>
	<div>
	<form action="login_signin.php" method="POST">
<?php session_start(); if(isset($_SESSION['username'])){ echo $_SESSION['username']; } ?>
		</form>
	</div>
</div>


<h1>Authentication with Active Directory</h1>
<form action="ldap.php" method="post">
<input type="text" name="username" /> <br>
<input type="password" name="password" /> <br>
<input type="submit" name="Login"/>
</form>
