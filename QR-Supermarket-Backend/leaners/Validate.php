<?php

	include_once("DBconnect.php");

if (isset($_POST['login'])){
	$uname=$_POST['username'];
	$pass=$_POST['password'];
	global $dcon;
	$sql="SELECT id, password, email FROM users where username=?";
	$result=$dcon->prepare($sql);
	$result->bind_param("s",$uname);
	$result->execute();?>
	<script>
		alert("who are you <?php echo $uname; ?>");
	</script>
	<?php
	
	$res=$result->get_result();
	$result->close();
	$row = mysqli_fetch_array($res, MYSQLI_ASSOC);
	$count=$res->num_rows;
	if($count==1 && $row['password'] == $password)
	{
		header("location: index.php");
	}

	elseif($count==1)
	{
		echo "bad password";
	header("location: login.php");
	}

	else
		echo "user not found";
	header("location: login.php");

	}

elseif (isset($_POST['reg'])) {
	header("location: register.php");
}

?>