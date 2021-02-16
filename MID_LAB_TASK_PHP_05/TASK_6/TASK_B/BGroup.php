<?php
	
	if(isset($_POST['bGroup']))
	{
		echo "Blood Group: ";
		$bgroup = $_POST['bGroup'];
		echo "$bgroup \r\n";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Blood Group</title>
</head>
<body>
	<form method="POST" action="">
		<fieldset>
			<legend>Blood Group</legend>
				 <select name="bGroup">
		 	 		<option value="A+">A+</option>
		 	 		<option value="B+">B+</option>
		 	 		<option value="O+">O+</option>
		 	 	</select>
		 	 	<hr>
				<input type="submit" name = "Submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>