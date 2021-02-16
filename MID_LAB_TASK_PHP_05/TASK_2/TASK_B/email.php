<?php
	
	if(isset($_POST['Submit']))
	{
		$email = $_POST['myEmail'];
		echo "$email";
	}
?>


<html>
<head>
	<title>Email</title>
</head>
<body>
	<form method="POST" action="">
		<fieldset>
			<legend>Email</legend>
			<table>
				<tr>
					<td>
						<input type="email" name="myEmail">
						<hr>
						<input type="submit" name="Submit" value="Submit">
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>