<?php

function check($a,$b) 
{
	if (is_numeric($a) && is_numeric($b)) 
	{
		return true;
	} else 
	{
		echo "Error! \$a and/or \$b was not a number!\n";
		return false;
	}
}

function add($a,$b) 
{
	if (check($a,$b)) 
	{
		return $a + $b . PHP_EOL;
	} 
}

echo add(1,2);

function subtract($a, $b) 
{
 	if(check($a,$b)) 
 	{
		return $a - $b . PHP_EOL;
	} 
}

echo subtract(4,3);

function multiply($a, $b) 
{
	if(check($a,$b)) 
	{
		return $a * $b . PHP_EOL;
	} 
}

echo multiply(3,3);

function divide($a, $b) 
{
	if(check($a,$b)) 
	{
		if($b == 0) 
		{
			echo "Error: Can't divide by 0.\n";
			return false;
		}
		return $a / $b . PHP_EOL;	
	}
}

echo divide(3,0);

function modulus($a, $b) 
{
	if(check($a,$b)) 
	{
		return $a % $b . PHP_EOL;
	} 
}

echo modulus(7,6);








