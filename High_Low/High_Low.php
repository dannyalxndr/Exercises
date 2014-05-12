<?php

$number = rand ( 1 , 100 );

$attempts = 1;

fwrite(STDOUT, "Pick a number between 1 and 100 \n");

$guess = (int) fgets(STDIN);

do 
{
	if ($guess < $number) 
	{
	
		fwrite(STDOUT, "HIGHER\n");
		$guess = (int) fgets(STDIN);
	}
	elseif ($guess > $number)
	{
		fwrite(STDOUT, "LOWER\n" );
		$guess = (int) fgets(STDIN);
	}
	echo "Guess? ";
	$attempts++;
} 
while ($guess != $number);

echo "GOOD GUESS, you are correct! It took you {$attempts} guesses.\n";
	

?>



