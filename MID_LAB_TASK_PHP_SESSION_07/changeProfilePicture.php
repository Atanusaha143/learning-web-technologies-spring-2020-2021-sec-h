<?php
	session_start();
	if(isset($_SESSION['flag']))
	{
?>

<!DOCTYPE html>
<html>
<head>
	<title>View Profile</title>
</head>
<body>
	<table border="1" width="100%" cellspacing="0">
		<tr>
			<td align="right" colspan="3">
				<a href="home.php"> <img src="logo.png" align="left"> </a>
				Logged in as <?php print_r($_SESSION['name']) ?>
				&nbsp | &nbsp
				<a href="logout.php"> Logout</a>
				&nbsp
			</td>
		</tr>
		<tr height = "200px">
			<td width="33%">
				<h4> &nbsp &nbsp &nbsp Account </h4>
				<hr width="90%">
				<ul>
					<li> <a href="home.php"> Dashboard </a></li>
					<li> <a href="viewProfile.php"> View Profile </a></li>
					<li> <a href="editProfile.php"> Edit Profile </a> </li>
					<li> <a href="changeProfilePicture.php"> Change Profile Picture </a> </li>
					<li> <a href="changePassword.php"> Change Password </a> </li>
					<li> <a href="logout.php" > Logout </a> </li>
				</ul>
			</td>
			<td colspan="2" align="center">
				<br>
				<form method="POST" action="">
				<fieldset style="width: 30%">
					<legend> <b> PROFILE PICTURE </b></legend>
					<table align="left">
						<tr>
							<td>
								<img src="user.png" height="100px" width="100px" >
							</td>
						</tr>
						<tr>
							<td>
								<input type="file" name="uploadProfilePicture">
							</td>
						</tr>
					</table>	
				</fieldset>
					<hr width="80%">
					<input type="submit" name="Submit" value="Submit">
				</fieldset>
				</form>
				<br> 
			</td>
		</tr>
		<tr height = "50px">
			<td colspan="3">
				<center> Copyright &copy 2017 </center>
			</td>
		</tr>
	</table>
</body>
</html>

<?php

	}else{
		echo "Please do Registration before login in";
		header('location: registration.php');
	}

?>