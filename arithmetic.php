<?php

//This is the exercise for 
//Functions I
//Page: 2 of 5
//Date:  15 May 14
//Name:  Andre Dempsey
//Codeup Baddies

//1. Validate all the arguments, and display an error if the input is not numeric.
//2. Validate divide by 0 errors, display error if attempts to divide by 0 are made.
//3. Make the error messages show the values of the arguments.
//4. Refactor the error messages into their own function, have the other functions use it for error messaging.

function add($a, $b) 
{
	if (is_numeric($a) && is_numeric($b)) //check to ensure variables are numeric
 	{
    	if ($b!=0) //check for zero value before dividing to trap error
    	{
    		echo "$a"." + "."$b"." = ";
    		echo $a + $b;
    	} 
    }
    else
 	{
 		ErrorCheck($a,$b,false);
 	}
 	echo PHP_EOL;	
}

function subtract($a, $b) 
{
	if (is_numeric($a) && is_numeric($b)) //check to ensure variables are numeric
 	{
    	if ($b!=0) //check for zero value before dividing to trap error
    	{
    		echo "$a"." - "."$b"." = ";
    		echo $a - $b;
    	} 
    }
    else
 	{
 		ErrorCheck($a,$b,false);
 	}
 	echo PHP_EOL;	
}

function multiply($a, $b) 
{
	if (is_numeric($a) && is_numeric($b)) //check to ensure variables are numeric
 	{
    	if ($b!=0) //check for zero value before dividing to trap error
    	{
    		echo "$a"." * "."$b"." = ";
    		echo $a * $b;
    	} 
    }
    else
 	{
 		ErrorCheck($a,$b,false);
 	}
 	echo PHP_EOL;	
}

function divide($a, $b) 
{
	if ($b==0) 
 	{
 		ErrorCheck($a,$b,true);
 	}
 	if (is_numeric($a) && is_numeric($b)) //check to ensure variables are numeric
 	{
    	if ($b!=0) //check for zero value before dividing to trap error
    	{
    		echo "$a"." / "."$b"." = ";
    		echo $a / $b;
    	} 
    }
    else
 	{
 		ErrorCheck($a,$b,false);
 	}
 	echo PHP_EOL;	
}
function modulus($a, $b) 
{
	if ($b==0) 
 	{
 		ErrorCheck($a,$b,true);
 	}
 	if (is_numeric($a) && is_numeric($b)) //check to ensure variables are numeric
 	{
    	if ($b!=0) //check for zero value before dividing to trap error
    	{
    		echo "$a"." mod "."$b"." = ";
    		echo $a % $b;
    	} 
    }
    else
 	{
 		ErrorCheck($a,$b,false);
 	}
 	echo PHP_EOL;	
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

echo "add" . PHP_EOL;
add(54,2);
echo "substract" . PHP_EOL;
subtract(54,2);
echo "modulus" .PHP_EOL;
modulus(20,2);
echo "multiply" . PHP_EOL;
multiply(5,2);
echo "divide" . PHP_EOL;
divide(30,10);

