<?php
	session_start();
	if (isset($_POST['cPassword']) && $_POST['cPassword'] !== $_SESSION['password']) { echo "Your entered Current Password is not correct! ";}
	elseif (isset($_POST['nPassword']) && $_POST['cPassword'] === $_POST['nPassword']) { echo "Your entered the old password as new password! ";}
	elseif (isset($_POST['rnPassword']) && $_POST['rnPassword'] !== $_POST['nPassword']) { echo "Please enter password carefully!";} 
	elseif (isset($_POST['rnPassword']) && $_POST['rnPassword'] === $_POST['nPassword']) { $_SESSION['password'] = $_POST['nPassword']; echo "Password Chnaged!"; }
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
				<fieldset style="width: 50%">
					<legend> <b> CHANGE PASSWORD </b></legend>
						<table>
							<tr>
								<td> Current Password: </td>
								<td>
									<input type="password" name="cPassword">
								</td>
							</tr>

							<tr>
								<td>
									New Password:
								</td>
								<td>
									<input type="password" name="nPassword">
								</td>
							</tr>

							<tr>
								<td>
									Retype New Password:
								</td>
								<td>
									<input type="password" name="rnPassword" >
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