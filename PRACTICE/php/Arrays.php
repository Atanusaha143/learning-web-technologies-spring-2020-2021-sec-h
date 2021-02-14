<?php
	
	$student1 =  array(1, 'Atanu', 3.98, "atanu.saha415@gmail.com"); // This is a Funtional Numeric Array
	echo "$student1[1] \r\n";

	$student2 =  [1, 'Atanu', 3.98, "atanu.saha415@gmail.com"]; // This is a non Funtional Numeric Array
	echo "$student2[3]";

	$students = [
					[3, 'Alex'], // This is a Multi Dimensional Array
					[4, 'Bob'],
					[5, 'Alexa']
				];

	echo "\r\n";
	echo $students[0][1];

	$arr = ['id'=>1, 'name'=>"Associative Array"]; // Associative Array
	echo "\r\n";
	echo $arr["name"];

	$brr = [
				'brr1'=>['id'=>3, 'name'=>'Alex'], // This is a Multi Dimensional Associative Array
				'brr2'=>[4, 'name'=>'Bob'],
				'brr3'=>[5, 'name'=>'Alexa']
			];

	echo "\r\n";
	echo $brr['brr2']['name'];
?>