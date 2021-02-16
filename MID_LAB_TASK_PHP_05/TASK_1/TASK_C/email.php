<?php
	
	if(isset($_POST['Submit']))
	{
		echo "Email: ";
		$email = $_POST['myEmail'];
		echo "$email";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Email</title>
</head>
<body>
	<form method="POST" action="">
		<fieldset>
			<legend>EMAIL</legend>
			<table>
				<tr>
					<td>
						<input type="email" name="myEmail" value="<?php if(isset($_POST['myEmail'])) { echo $_POST['myEmail']; } ?> ">
						<hr>
						<input type="submit" name="Submit" value="Submit">
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>