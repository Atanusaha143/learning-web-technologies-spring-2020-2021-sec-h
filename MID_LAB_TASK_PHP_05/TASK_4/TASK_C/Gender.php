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
            <input type="radio" name="gender" value="Male" <?php if(isset($_POST['gender']) && $_POST['gender'] === "Male") { echo "checked";}?> > Male
            <input type="radio" name="gender" value="Female" <?php if(isset($_POST['gender']) && $_POST['gender'] === "Female") { echo "checked";}?> > Female
            <input type="radio" name="gender" value="Others" <?php if(isset($_POST['gender']) && $_POST['gender'] === "Others" ) { echo "checked";}?> > Others
			<hr>
			<input type="submit" name = "Submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>