<?php
	
	if(isset($_POST['Submit']))
	{
		$date = $_POST['date'];
		$month = $_POST['month'];
		$year = $_POST['year'];
		echo "$date \r\n";
		echo "$month \r\n";
		echo "$year \r\n";
	}
?>


<html>
<head>
	<title>DOB</title>
</head>
<body>
	<form method="POST" action="">
		<fieldset>
			<legend>DOB</legend>
				<pre> <b> dd       			mm       			yyyy </b> </pre>
				<input type="number" name="date" size="5"> /
				<input type="number" name="month" size="5"> /
				<input type="number" name="year" size="5"> <br> <br>
				<hr>
				<input type="submit" name = 'Submit' value="Submit">
		</fieldset>
	</form>
</body>
</html>