<?php

for ($x = 1;$x <= 100;$x++) 
{
	if ($x % 15 == 0) 
	{
		echo "FizzBuzz\n";
	}
	elseif ($x % 5 == 0) 
	{
		echo "Buzz\n";
	}
	elseif ($x % 3 == 0) 
	{

		echo "Fizz\n";
	}
	else
	{
		echo "$x\n";
	}		
}

// for ($x = 1;$x <= 100;$x++) 
// {
// 	$divisibleBy3 = ($x % 3 == 0);
// 	$divisibleBy5 = ($x % 5 == 0);

// 	if ($divisibleBy3 && $divisibleBy5)
// 	{
// 		echo "FIZZBUZZ";
// 	}
// 	elseif ($divisibleBy3)
// 	{
// 		echo "FIZZ";
// 	}
// 	elseif ($divisibleBy5)
// 	{
// 		echo "BUZZ";
// 	}
// 	else
// 	{
// 		echo $x;
// 	}

// 	echo PHP_EOL;
// }

// $x = 1;
// do
// {
// 	if ($x % 15 == 0) 
// 	{
// 		echo "FizzBuzz\n";
// 	}
// 	elseif ($x % 5 == 0) 
// 	{
// 		echo "Buzz\n";
// 	}
// 	elseif ($x % 3 == 0) 
// 	{
// 		echo "Fizz\n";
// 	}
// 	else
// 	{
// 		echo "$x\n";
// 	}		
//     $x++;
// } 
// while ($x <= 100);




