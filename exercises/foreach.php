<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);


//echo's out values if the are scalar
// foreach ($things as $thing) {
//     if (is_int($thing)) {
//          echo "{$thing} is an interger\n";
//     } 
//     elseif (is_float($thing)) {
//         echo "{$thing} is a float\n";
//     } 
//     elseif (is_bool($thing)) {
//     	echo "{$thing} is a boolean\n";
//     }
//     elseif (is_array($thing)) {
//     	echo "Value is an array\n";
//     }
//     elseif (is_null($thing)) {
//     	echo "{$thing} is null\n";
//     }
//     elseif (is_string($thing)) {
//      	echo "{$thing} is a string\n";
//     if (is_scalar($thing)) {
//     	echo "{$thing} \n";
//      }
// }



// echo's out every value in the array as well
  //   if (is_scalar($thing)) {
  //     	echo "{$thing} \n";
  //   }
  //   elseif (is_null($thing)) {
  //    	echo "{$thing} \n";
  //   }
  //   elseif (is_array ($thing)) {
  //    	foreach ($thing as $inside_array) {
  //    		echo "$inside_array \n"; 
  //   	}
  //   }
   
  // }



foreach ($things as $thing) 
{
    if (is_int($thing)) 
    {
        echo "{$thing} is an interger\n";
    } 
    elseif (is_float($thing)) 
    {
        echo "{$thing} is a float\n";
    } 
    elseif (is_bool($thing)) 
    {
    	echo "{$thing} is a boolean\n";
    }
    elseif (is_array($thing)) 
    {
    	foreach ($thing as $item)
    	{
    		echo $item . ",";
    	}
    	echo "...is an array\n";
    }
    elseif (is_null($thing)) 
    {
    	echo "{$thing} is null\n";
    }
    elseif (is_string($thing)) 
    {
    	echo "{$thing} is a string\n";
    }
}