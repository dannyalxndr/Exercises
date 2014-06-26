<?php

// prompt asks for your name
fwrite (STDOUT, 'What is your name? ');

$name = trim(fgets(STDIN));

// prompt asks you for your starting number
fwrite(STDOUT, "Hello there $name. I am going to ask you to pick two numbers\n
	so that I can give you the list of every number.\n
	Now choose a starting number..\n");

$number1 = trim(fgets(STDIN));

// condition for number 1 to be numeric. if not, then program exits
if (!is_numeric($number1)) 
{
	echo "I need a number, chief.\n";
	exit(1);
}

// prompt asks you for your ending number
fwrite(STDOUT, "Great! Now choose an ending number..\n");

$number2 = trim(fgets(STDIN));

// condition for number 2 to be numeric. if not, then program exits
if (!is_numeric($number2)) 
{
	echo "I need a number, chief.\n";
	exit(1);
}

// prompt asks you for your increment
fwrite(STDOUT, "Choose your increment." . PHP_EOL);

$increment = trim(fgets(STDIN));

// condition for there being no input, if not numeric.
if ($increment == " ") 
{
	$increment = 1;
}
elseif (!is_numeric($increment)) 
{
	echo "I need a number, chief.\n";
	exit(1);
}

// conditions if number 1 is greater than number 2
if ($number1 < $number2) 
{ 
	define('LOWEND', (int)$number1);
	define('TOPEND', (int)$number2);
} 
elseif ($number1 > $number2) 
{
	define('LOWEND', (int)$number2);
	define('TOPEND', (int)$number1);
} 
else 
{
	echo "Must enter two different numbers to begin.\n";
	exit(1);
}

// prompt gets ready to give you the results
fwrite(STDOUT, "Here you go..\n");
for ( $number1 ; $number1 <= $number2 ; $number1 = $number1 + $increment ) 
{
	echo "$number1\n";
}

echo "There you go! :) " . PHP_EOL;






