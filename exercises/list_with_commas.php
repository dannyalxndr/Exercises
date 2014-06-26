<?php

// Converts array into list n1, n2, ..., and n3
function humanized_list($string, $x = false) 
{
	// explodes array to edit the last item in the string.
	$array = explode(', ', $string);

	// second parameter allows sorting to be optional
	if($x === true)
	{
		sort($array);
	}

	// removes last item and replaces it with new item
	$last_item = array_pop($array);

	$array[] = "and $last_item";
	
	$string = implode(', ', $array);

	return $string;
}

// the string
$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

// calling function to edit the string
$famous_fake_physicists = humanized_list($physicists_string, true);

// final result
echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}.";









