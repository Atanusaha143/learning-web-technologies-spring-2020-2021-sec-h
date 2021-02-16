<?php
	
	if( isset($_POST['Submit']) && isset($_POST['date']) && isset($_POST['month']) && isset($_POST['year']))
	{
		$date = $_POST['date'];
		$month = $_POST['month'];
		$year = $_POST['year'];

		echo "Date: $date \r\n";
		echo "Month: $month \r\n";
		echo "Year: $year \r\n";
	}
?>


<html>
<head>
	<title>DOB</title>
</head>
<body>
	<form method="POST" action="">
		<fieldset>
			<legend>DATE OF BIRTH</legend>
				<pre> <b> dd       			mm       			yyyy </b> </pre>
				<input type="number" name="date" size="5" value="<?php if(isset($_POST['date'])) { echo $_POST['date']; } ?>"> /
				<input type="number" name="month" size="5" value="<?php if(isset($_POST['month'])) { echo $_POST['month']; } ?>"> /
				<input type="number" name="year" size="5" value="<?php if(isset($_POST['year'])) { echo $_POST['year']; } ?>"> <br> <br>
				<hr>
				<input type="submit" name = 'Submit' value="Submit">
		</fieldset>
	</form>
</body>
</html>