<?php
	session_start(); 
?>

<!DOCTYPE html>
<html>
<head>
	<title>User Profile</title>
</head>
<body>
	<center>
	<h1>
		Welcome 
		<?php 
			echo $_SESSION['name'];  
		?>
	!</h1>
	<a href="profile.html">Profile</a>
	<br/>
	<a href="change_password.html">Change Password</a>
	<br/>
	<a href="login.html">Logout</a>
</center>
</body>
</html>