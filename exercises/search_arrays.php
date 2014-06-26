<?php

// first names
$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];


function array_has_value($needle, $haystack)
{

	if(array_search($needle, $haystack) === false)
	{
		return false;
	}
	else
	{
		return true;
	}
}

// var_dump(array_has_value('Michael', $names));

// Create a function to compare 2 arrays that returns the number of values in common between the arrays. Use the 2 example arrays and make sure your solution uses array_search().


function array_common_count($array1, $array2)
{
	$count = 0;

	foreach($array1 as $value)
	{
		if(array_has_value($value, $array2))
		{
			$count++;
		}
	}
	return $count;
}

var_dump(array_common_count($names, $compare));








