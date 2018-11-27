<!--
Here, we write code for registration.
-->
<?php
require_once('connection.php');
$uname  = $email = $password = $pwd = '';

$uname = $_POST['username'];
$email = $_POST['email'];
$pwd = $_POST['password'];
$password = MD5($pwd);

$sql = "INSERT INTO tbluser (Username,Email,Password) VALUES ('$uname','$email','$password')";
$result = mysqli_query($conn, $sql);
if($result)
{
	header("Location: login.php");
}
else
{
	echo "Error :".$sql;
}
?>