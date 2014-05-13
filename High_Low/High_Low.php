<?php

// there must be 2 arguments in the command prompt.
if ($argc != 3) {
	echo "Hey! I need you to put in 2 numbers!\n";
	exit(1);
}

// both arguments must be int's.
elseif (!is_numeric($argv[1]) || !is_numeric($argv[2])) 
{
	echo "I have no idea what you're talking about buddy\n";
	exit(1);
}
// Allowing greater or lesser number to be entered in any order
if ($argv[1] < $argv[2]) 
{ 
	define('LOWEND', (int)$argv[1]);
	define('TOPEND', (int)$argv[2]);
} 
elseif ($argv[1] > $argv[2]) 
{
	define('LOWEND', (int)$argv[2]);
	define('TOPEND', (int)$argv[1]);
} 
else 
{
	echo "Must enter two different numbers to begin.\n";
	exit(1);
}

// variables are defined here.
$lownumber = $argv[1];

$highnumber = $argv[2];

$number = rand ( $lownumber , $highnumber );

$attempts = 1;

// if user gets answer correct first try.
$hole_in_one = 'HOLE IN ONE!!!! YOU\'S A BADDD MOTHAAA ...';

// opening statement.
fwrite (STDOUT, 'What is your name? ');

$name = trim (fgets(STDIN));

fwrite(STDOUT, "Hi there $name. Pick a number between $lownumber and $highnumber" . PHP_EOL);

// user inputs their guess in the command prompt.
$guess = (int) fgets(STDIN);

// conditions are layed out here.
do 
{
	if ($guess == $number) {
		echo $hole_in_one . PHP_EOL;
		exit(0);
	}
	elseif ($guess < $number) 
	{
		fwrite(STDOUT, "HIGHER:\n");
		$guess = (int) fgets(STDIN);
	}	
	elseif ($guess > $number)
	{
		fwrite(STDOUT, "LOWER:\n" );
		$guess = (int) fgets(STDIN);
	}

	$attempts++;
} 
while ($guess != $number);

// when the correct answer is reached.
echo "GOOD GUESS, you are correct! It took you {$attempts} guesses.\n";

?>


