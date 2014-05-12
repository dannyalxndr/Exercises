<?php

$lownumber = $argv[1];

$highnumber = $argv[2];

$number = rand ( $lownumber , $highnumber );

$attempts = 1;

fwrite(STDOUT, "Pick a number between $lownumber and $highnumber" . PHP_EOL);

if ($argc < 3) {
	echo "Hey! I need you to put in more information!\n";
	exit(1);
}
$guess = (int) fgets(STDIN);

do 
{
	if ($guess < $number) 
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

echo "GOOD GUESS, you are correct! It took you {$attempts} guesses.\n";
	

?>



