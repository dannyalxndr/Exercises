<?php

$number = rand ( 1 , 100 );

fwrite(STDOUT, 'Guess? ');

$guess = (int) fgets(STDIN);

do 
{
	if ($guess < $number) 
	{
	
		fwrite(STDOUT, 'HIGHER ');
		$guess = (int) fgets(STDIN);
	}
	
	elseif ($guess > $number)
	{
		
		fwrite(STDOUT, 'LOWER ');
		$guess = (int) fgets(STDIN);
	}

} 
while ($guess != $number);

echo 'GOOD GUESS!';
	

?>



