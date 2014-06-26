<?php

// Set the default timezone
date_default_timezone_set('America/Chicago');

// Get Day of Week as number
// 1 (for Monday) through 7 (for Sunday)

// same results, just using if/elseif functions
$day_of_week = date('N');

// if ($day_of_week == 1)
// {
//     echo 'monday' . PHP_EOL;
// }
// elseif ($day_of_week == 2)
// {
//     echo 'tuesday' . PHP_EOL;
// }
// elseif ($day_of_week == 3)
// {
//     echo 'wednesday' . PHP_EOL;
// }
// elseif ($day_of_week == 4)
// {
//     echo 'thursday' . PHP_EOL;
// }
// elseif ($day_of_week == 5)
// {
//     echo 'friday' . PHP_EOL;
// }
// elseif ($day_of_week == 6)
// {
//     echo 'saturday' . PHP_EOL;
// }
// elseif ($day_of_week == 7)
// {
//     echo 'sunday' . PHP_EOL;
// }

switch($day_of_week) 
{
    case 1:
        echo 'monday' . PHP_EOL;
        break;
  	case 2:
        echo 'tuesday' . PHP_EOL;
        break;
    case 3:
        echo 'wednesday' . PHP_EOL;
        break;
    case 4:
        echo 'thursday' . PHP_EOL;
        break;
    case 5:
        echo 'friday' . PHP_EOL;
        break;
    case 6:
        echo 'saturday' . PHP_EOL;
        break;
    case 7:
        echo 'sunday' . PHP_EOL;
        break;
}



















