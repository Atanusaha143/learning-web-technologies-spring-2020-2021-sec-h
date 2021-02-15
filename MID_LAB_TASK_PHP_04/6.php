<?php

	$studentArr =  [1, 'Atanu', 3.98, "atanu.saha415@gmail.com"];
	$element = 'Atanu';
	$check = false;
	foreach ($studentArr as $value) 
	{
		if($value === $element)
		{
			echo "Search element found \r\n Element: $value";
			$check = true;
			break;
		}
	}

	if($check==false) echo "\r\n Element not found...";
?>