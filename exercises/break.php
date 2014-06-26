<?php

$array = ['alpha', 'beta', 'charlie'];

foreach($array as $value)
{
	echo $value . PHP_EOL;
	for ($i = 0; $i <= 10; $i ++) 
	{
		echo $i . "\n";
    	if ($i % 2 == 0) 
    	{
        	// continue; // go to the beginning of the (for) loop
        	break 2; // get out of the loop. break 2 means get out of 2 loops.
        }
        echo "^ This is an odd number\n";
    }
    
}
   
echo "DONE!\n";