<?php
	
	if(isset($_POST['Submit']))
	{
		$name = $_POST['myName'];
		echo "$name";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Name</title>
</head>
<body>
	<form method="POST" action="">
		<fieldset>
			<legend>NAME</legend>
			<table>
				<tr>
					<td>
						<input type="text" name="myName" value="<?php if(isset($_POST['myName'])) { echo "$myName"; } ?> ">
						<hr>
						<input type="submit" name="Submit" value="Submit">
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>