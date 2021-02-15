<?php
	
	function sum() // without parameter
	{
		return 1 + 3 ;
	}

	echo sum();

	echo "\r\n";

	function sum1($a, $b) // with parameter
	{
		return $a + $b ;
	}

	echo sum1(2,3);

	echo "\r\n";

	function sum2($a = 0, $b = 0) // with default value parameter
	{
		return $a + $b ;
	}

	echo sum2(2);


?>