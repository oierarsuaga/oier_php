<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<style type="text/css">
	#contenar{
		height: 100%;
		width: 100%;

	}
	#r{
		margin-top: 5%;
		margin-bottom: 5%;
		margin-right: 5%;
		margin-left: 5%;
		float: center;
		background-color: #b7bcbd;

	}

	</style>




</head>

<body>
<?php
include('include/db_con.php');
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: '."login_signin.php");
}
if(isset($_POST['sub']))
{
$username=$_POST['username'];
$comentario=$_POST['comentarios'];
/*$roomtype=$_POST['field_1'];
$startdate=$_POST['startdate'];
$enddate=$_POST['enddate'];
$room_nos=$_POST['room_nos'];
$amount=$_POST['roomprice'];

$checkroom= "select count(*) from roomdetail where room_type='".$roomtype."' ";
$check=mysqli_query($con,$checkroom);
$roomcount=mysqli_fetch_array($check,MYSQLI_NUM);
 $checkcount=$roomcount[0];*/
if($checkcount>=10)
{
?> <script>alert("Sorry Rooms Are not Available :( please try another Option !!");</script>
<?php }
else{
$s1="INSERT INTO comentario (username,comentario)VALUES('".$username."','".$comentario."')";
mysqli_query($con,$s1);
header("location:registration.php");
}
}
?>

<div id="contenar">

	<div id="r">
	<form action="registration.php" method="POST">
	<h2 align="center" id="h"><u><i>Book Room</i></u></h2>
	<h3> Welcome   <?php session_start(); if(isset($_SESSION['username'])){ echo $_SESSION['username']; } ?> !!!</h3>
	<?php if(isset($_GET['success'])){
		echo '<h4> Your room Booked successfully,You will be contacted soon. !!!</h4>';
	}?>

	<td><input name="username" type="hidden" value="<?php session_start(); if(isset($_SESSION['username'])){ echo $_SESSION['username']; } ?>"  />

		   <tr>
            <td>comentario</td>
            <td>
              <input name="comentarios" type="text " size="10"/></td>
          </tr>
          <tr>
            <td colspan="2" align="center">
			<input type="submit" name="sub" value="Pay & Book" /></td>
            </tr>

       </table>
		</form>



	</div>
</div>
</body>
</html>
