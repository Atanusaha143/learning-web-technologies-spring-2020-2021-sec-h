<?php
	
	if($_POST['myName'] !== '')
	{
		echo "Name: ";
		$name = $_POST['myName'];
		echo "$name";
	}
	else
	{
		echo "Enter a name";
	}
?>