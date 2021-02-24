<?php
	session_start();
	if(isset($_SESSION['flag']))
	{
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Welcome home, XYZ</h1>
</body>
</html>

<?php

	}else{
		header('location: registration.php');
	}

?>