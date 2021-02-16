<?php
	
	if(isset($_POST['Submit']))
	{
		echo "Degree: ";
		$degree = $_POST['degree'];
		echo "$degree \r\n";
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Degree</title>
</head>
<body>
	<form method="POST" action="">
		<fieldset>
			<legend>Degree</legend>
			<input type="checkbox" name="degree" value="SSC"> SSC
			<input type="checkbox" name="degree" value="HSC"> HSC
			<input type="checkbox" name="degree" value="BSc"> BSc
			<input type="checkbox" name="degree" value="MSc"> MSc
			<hr>
			<input type="submit" name = "Submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>