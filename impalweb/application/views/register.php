<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>
	<?php
		$smsg=$this->session->flashdata('smsg');
		$emsg=$this->session->flashdata('emsg');
		if($emsg){
			echo $emsg;
		}
		if($smsg){
			echo $smsg;
		}
	?>
	<h3>Register User Baru</h3>
	<form method="post" action="<?php echo site_url('user/register'); ?>">
		<table>
			<tr><td>Name</td><td><input type="text" name="name"></td></tr>
				<tr><td>Email</td><td><input type="email" name="email"></td></tr>
				<tr><td>Password</td><td><input type="password" name="password"></td></tr>
				<tr><td></td><td><input type="submit" name="submit" value="Register Now "></td></tr>

		</table>	
	</form>

</body>
</html>