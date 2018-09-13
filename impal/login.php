<?php 
	
	$host="localhost";
	$user="root";
	$password="";
	$db="demo";

	mysql_connect($host,$user,$password);
	mysql_select_db($db);

	if(isset($_POST['username'])){
		$uname=$_POST['username'];
		$password=$_POST['password'];

		$sql="select * from loginform where user='".$uname."'AND pass='".$password."' limit 1";

		$result=mwsql_query($sql);
		if(mysql_num_rows($result)==1){
			echo "berhasil login";
			exit();
		}
		else{
			echo("password salah");
			exit();
		}
	}
 ?>




<!DOCTYPE html>
<html>
<head>
	<title>form</title>
	<link rel="stylesheet" type="text/css" href="css3\style.css">
	<link rel="stylesheet" type="text/css" href="css3\font-awesome.min.css">
</head>
<body>
	<div class="container">
		<img src="image\login.jpg"/>
		<form method="POST" action="#">
			<div class="form_input">
				<input type="text" name ="username" plaeholder="enter your user name">
			</div>
			<div class="form_input">
				<input type="password" name="password" placeholder="enter your password">
			</div>
			<input type="submit" name="submit" value="LOGIN" class="btn-login">
		</form>
		
	</div>

</body>
</html>