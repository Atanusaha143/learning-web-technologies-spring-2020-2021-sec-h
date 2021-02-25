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
					<li> <a href="logout.php"> > Logout </a> </li>
				</ul>
			</td>
			<td colspan="2" align="center">
				<br>
				<fieldset style="width: 50%">
					<legend> <b> PROFILE </b> </legend>
					<table>
						<tr>
							<td>
								<b>Name:</b>
							</td>
							<td colspan="2">
								<?php print_r($_SESSION['name']) ?>
							</td>
							<td rowspan="5">
								&nbsp &nbsp &nbsp &nbsp &nbsp
								<img src="user.png" alt="User Profile Picture" width="150" height="100">
								<p align="center"> <a href="changeProfilePicture.php"> Change </a> </p>
							</td>
						</tr>
						<tr> <td colspan="2"> <hr> </td> </tr>
						<tr>
							<td>
								<b>Email:</b>
							</td>
							<td>
								<?php print_r($_SESSION['email']) ?>
							</td>
						</tr>
						<tr> <td colspan="2"> <hr> </td> </tr>
						<tr>
							<td>
								<b>Gender:</b>
							</td>
							<td>
								<?php print_r($_SESSION['gender']) ?>
							</td>
						</tr>
						<tr> <td colspan="2"> <hr> </td> </tr>
						<tr>
							<td>
								<b>Date of Birth:</b>
							</td>
							<td>
								<?php print_r($_SESSION['date']) ?>/<?php print_r($_SESSION['month']) ?>/<?php print_r($_SESSION['year']) ?>
							</td>
						</tr>
						<tr> <td colspan="4"> <hr> </td> </tr>
						<tr>
							<td> 
								<a href="editProfile.php"> Edit Profile </a>
							</td>
						</tr>
					</table>
				</fieldset>
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