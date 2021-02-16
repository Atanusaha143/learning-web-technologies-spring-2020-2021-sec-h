<?php
	
	if(isset($_POST['Submit']))
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
		 	 		<option value="A+" <?php if(isset($_POST["bGroup"]) && $_POST["bGroup"]=='A+') { echo "selected"; } ?> >A+</option>
		 	 		<option value="B+" <?php if(isset($_POST["bGroup"]) && $_POST["bGroup"]=='B+') { echo "selected"; } ?> >B+</option>
		 	 		<option value="O+" <?php if(isset($_POST["bGroup"]) && $_POST["bGroup"]=='O+') { echo "selected"; } ?> >O+</option>
		 	 	</select>
		 	 	<hr>
				<input type="submit" name = "Submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>