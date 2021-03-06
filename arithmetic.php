<?php

//This is the exercise for 
//Functions I
//Page: 3 of 5
//Date:  15 May 14
//Name:  Andre Dempsey
//Codeup Baddies

//1. Validate all the arguments, and display an error if the input is not numeric.
//2. Validate divide by 0 errors, display error if attempts to divide by 0 are made.
//3. Make the error messages show the values of the arguments.
//4. Refactor the error messages into their own function, have the other functions use it for error messaging.

//1. Refactor each function to return the result, removing the echo.
//2. Validate divide by 0 errors, return FALSE if divide by 0 is attempted.


function add($a, $b) 
{
	if (is_numeric($a) && is_numeric($b)) //check to ensure variables are numeric
 	{
    	if ($b!=0) 
    	{
       		return $a + $b;
    	} 
    }
    else
 	{
 		ErrorCheck($a,$b,false);
 	}	
}

function subtract($a, $b) 
{
	if (is_numeric($a) && is_numeric($b)) //check to ensure variables are numeric
 	{
    	if ($b!=0) 
    	{
       		return $a - $b;
    	} 
    }
    else
 	{
 		ErrorCheck($a,$b,false);
 	}	
}

function multiply($a, $b) 
{
	if (is_numeric($a) && is_numeric($b)) //check to ensure variables are numeric
 	{
    	if ($b!=0) 
    	{
       		return $a * $b;
    	} 
    }
    else
 	{
 		ErrorCheck($a,$b,false);
 	}	
}

function divide($a, $b) 
{
	if ($b==0) 
 	{
 		// ErrorCheck($a,$b,true);
 		return false;
 	}
 	if (is_numeric($a) && is_numeric($b)) //check to ensure variables are numeric
 	{
    	if ($b!=0) 
    	{
       		return $a / $b;
    	} 
    }
    else
 	{
 		// ErrorCheck($a,$b,false);
 		return false;
 	}	
}
function modulus($a, $b) 
{
	if ($b==0) 
 	{
 		// ErrorCheck($a,$b,true);
 		return false;
 	}
 	if (is_numeric($a) && is_numeric($b)) //check to ensure variables are numeric
 	{
    	if ($b!=0) 
    	{
       		return $a % $b;
    	} 
    }
    else
 	{
 		// ErrorCheck($a,$b,false);
 		return false;
 	}	
}

function ErrorCheck($a,$b,$dividebyzero=false)
{
	switch ($dividebyzero) 
	{
		case True:
			echo "ERROR:  You cannot enter a $b for the divisor.\n";	
			break;
		case False:
			echo "ERROR:  Please limit your inputs to numeric values. ";
 			echo PHP_EOL;	
 			if (is_array($a)) 
 			{
 				echo "\$a is an array.\n";	
 				print_r($a);
 			}
 			elseif(!is_numeric($a))
 			{
 				echo "The value of \$a is {$a} and it is NOT numeric.\n";
 			}	
 			if (is_array($b)) 
 			{
 				echo "\$b is an array.\n";	
 				print_r($b);
 			}
 			elseif(!is_numeric($b))
 			{
 				echo "The value of \$b is {$b} and it is NOT numeric.\n";
 			}	
			break;
	}
}
//test the functions

if ($argc<4) 
{
	echo "Please enter test values using the following format\n";
	echo "php arithmetic.php {[-a] or [-s] or [-m] or [-d] or [-md]} {value1} {value2}\n";

	exit (1);
}

switch ($argv[1]) 

{
	case '-a':
		echo "Add $argv[2] and $argv[3] to get\n";
		echo add($argv[2], $argv[3]);
		echo PHP_EOL;
		break;
	
	case '-s':
		echo "Subtract $argv[2] and $argv[3] to get\n";
		echo subtract($argv[2], $argv[3]);
		echo PHP_EOL;
		break;

	case '-m':
		echo "Multiply $argv[2] and $argv[3] to get\n";
		echo multiply($argv[2], $argv[3]);
		echo PHP_EOL;
		break;

	case '-d':
		echo "Divide $argv[2] and $argv[3] to get\n";
		if (divide($argv[2], $argv[3])!=False) 
		{
			echo divide($argv[2], $argv[3]);
		}
		else
		{
			var_dump(divide($argv[2], $argv[3]));
		}
		echo PHP_EOL;
		break;

	case '-md':
		echo "Modulus $argv[2] and $argv[3] to get\n";
		if (modulus($argv[2], $argv[3])!=False) 
		{
			echo modulus($argv[2], $argv[3]);
		}
		else
		{
			var_dump(modulus($argv[2], $argv[3]));
		}
		echo PHP_EOL;
		break;
}

// echo "add" . PHP_EOL;
// add(54,2);
// echo "subtract" . PHP_EOL;
// subtract(54,2);
// echo "modulus" .PHP_EOL;
// modulus(20,2);
// echo "multiply" . PHP_EOL;
// multiply(5,2);
// echo "divide" . PHP_EOL;
// divide(30,10);

