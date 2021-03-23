<?php

	$host = 'localhost';
	$dbUser = 'root';
	$dbPass = '';
	$dbName = 'final_lab_task_3';

	function getConnection()
	{
		global $host, $dbUser, $dbPass, $dbName; 
		$connection = mysqli_connect($host, $dbUser, $dbPass, $dbName);
		return $connection;
	}
?>