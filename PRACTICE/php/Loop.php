<?php
	
	$student = ['id'=>1, 'name'=> "Atanu", 'email'=>"atanu.saha415@gmail.com"];

	foreach ($student as $value) // Associative arrays can be handled by foreach loop 
	{
		echo $value;
		echo "\r\n";
	}

	foreach ($student as $key => $value) // Associative arrays can be handled by foreach loop 
	{
		echo $key;
		echo "\r\n";
	}

	$student1 = [1, "Atanu", "atanu.saha415@gmail.com"];

	for ($i=0; $i<count($student1) ; $i++) // Numeric arrays can be handled by for loop
	{ 
		echo $student1[$i];
		echo "\r\n";
	}

?>