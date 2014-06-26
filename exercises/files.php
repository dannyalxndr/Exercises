<?php

// what is the file
$filename = 'princesses.txt';

// tell it your file size
$fileSize = filesize($filename);

// define your handle
$read = fopen($filename, 'r');

// assign the file into a string variable
$princessString = trim(fread($read, $fileSize));

// take the string from the file and explode into an array
$princesses = explode("\n", $princessString);

$hots = array_rand($princesses);

$result = "The Ice King totally has the hots for {$princesses[$hots]}!\n";

echo $result;

fclose($read);

/////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////

// different paths to the same file
$filename = 'princess.txt';
$filename = '../notes/princesses.txt';
$filename = '/vagrant/notes/princess.txt';

echo __FILE__ . PHP_EOL;
echo __DIR__ . PHP_EOL;

// Boolean, checks if the file exists and can be read by our script
is_readable($filename);

// Get the size of the file, useful for reading entire file at once
$fileSize = filesize($filename);

// file pointer. Describes:
// 1. which file
// 2. what we can/can't do with the file (read, write, etc)
// 3. where we are in the file
$handle = fopen($filename, 'r');

// check if the file pointer has reached the end of the file
feof($handle);

// pull back the entire contents of the file as a single string
$princessString = fread($handle, $fileSize);
//$princessString = fread($handle, filesize($filename));

// Acoustics Princess\n
// Bee Princess\n
// Bounce House Princess\n
// Breakfast Princess\n
// etc..

// Always close your files when you're done with them!
fclose($handle);

function readyBytesATime($filename, $bytes = 100)
{
	$contents = '';
	if (is_readable($filename)) 
	{
		$handle = fopen($filename, 'r');

		while(!feof ($handle)) 
		{
			$contents .= fread($handle, $bytes);

			sleep(1);
		}

		fclose($handle);
	}

	return $contents;
}







$filename = 'princesses.txt';

$handle = fopen($filename, 'r');

$princessString = fread($handle, filesize($filename));

$princesses = explode(PHP_EOL, $princessString);

fclose($handle);

// other modes for opening files
// open for write, truncate the file
$handle = fopen('sorted_princesses.txt', 'w');

// open for write, put pointer at END
$handle =  fopen('sorted_princesses.txt', 'a');

// open for write, put pointer at BEGINNING
$handle = fopen('sorted_princesses.txt', 'c');

sort($princesses);

foreach ($princesses as $princess) 
{
	fwrite(STDOUT, $princess . PHP_EOL);
}

fwrite(STDOUT, implode("\n", $princesses));

fclose($handle);



$hots = array_rand($princesses);

fwrite(STDOUT, "The Ice King totally has the hots for {$princesses[$hots]}");

$handle = fopen('hots.log', 'a');

fwrite($handle, "The Ice King totally has the hots for {$princesses[$hots]}");

fclose($handle);

/////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////

// opening and saving a file

function save_file($filename, $contents)
{
	$handle = fopen($filename, 'w');
	fwrite($handle, $contents);
	fclose($handle);
}

function open_file($filename)
{
	$handle = fopen($filename, 'r');
	$content = fread($handle, filesize($filename));
	fclose($handle);
	return $content;
}








