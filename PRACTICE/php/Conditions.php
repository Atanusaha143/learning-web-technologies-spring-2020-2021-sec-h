<?php
	
	$num = 20;

	if($num=="20") echo "true"; // doesn't consider type
	else echo "false";

	echo "\r\n";


	if($num==="20") echo "true"; // triple equal checks value and type at the same time
	else echo "false";
?>