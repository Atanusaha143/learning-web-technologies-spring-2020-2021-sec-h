<?php
	
	if(isset($_POST['Submit']))
	{
		echo "Gender: ";
		$gender = $_POST['gender'];
		echo $gender;
	}
?>


<html>
<head>
	<title>DOB</title>
</head>
<body>
	<form method="POST" action="">
		<fieldset>
			<legend>Gender</legend>
			<input type="radio" name="gender"/ value="Male"> Male
			<input type="radio" name="gender"/ value="Female"> Female
			<input type="radio" name="gender"/ value="Other"> Other
			<hr>
			<input type="submit" name = "Submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>