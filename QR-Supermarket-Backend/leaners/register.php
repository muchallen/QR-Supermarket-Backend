<?php
require_once("DBconnect.php");

if(isset($_POST['regi'])){

$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];

global $dcon;
$sql="INSERT into users (username,password,email ) values( '{$username}', '{$password}', '{$email}')";
$resultset=$dcon->query($sql);

if(!$resultset){
	echo " failed to insert data";
}

else

	echo "data inserted successfully";
	header("location: login.php");

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Register Here</title>
</head>

<body>

<form method="post" action="register.php">
Username: <input type="text" name="username">

Password: <input type="text" name="password">

Email: <input type="text" name="email">

<button name="regi">Register</button>
</form>
</body>
</html>



