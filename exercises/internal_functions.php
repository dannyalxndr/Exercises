<?php

$nothing = NULL;
$something = '';
$array = array(1,2,3);

// created check function to see if the variable is set or empty
function check($x)
{
	unset($nothing);
	if (isset($x))
	{
		return '$variable is set.' . PHP_EOL;
	}
	elseif(empty($x)) 
	{
		return '$variable is empty.' . PHP_EOL;
	}
}

echo check($nothing);

// serialize and unserialize my array
$serial = serialize($array);

echo $serial . PHP_EOL;

print_r(unserialize($serial));









