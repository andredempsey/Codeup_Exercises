<?php

//This is the exercise for 
//Functions I
//Page: 2 of 5
//Date:  15 May 14
//Name:  Andre Dempsey
//Codeup Baddies

//1. Validate all the arguments, and display an error if the input is not numeric.
//2. Validate divide by 0 errors, display error if attempts to divide by 0 are made.
//3.  Make the error messages show the values of the arguments.

function add($a, $b) 
{
	if (is_numeric($a) && is_numeric($b)) //check to ensure variables are numeric
	{
    	echo $a + $b;
 	} 
 	else
 	{
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
 	}
 	echo PHP_EOL;	
}

function subtract($a, $b) 
{
if (is_numeric($a) && is_numeric($b)) //check to ensure variables are numeric
	{
    	echo $a - $b;
    } 
 	else
 	{
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
 	}
 	echo PHP_EOL;	
}

function multiply($a, $b) 
{
 if (is_numeric($a) && is_numeric($b)) //check to ensure variables are numeric
	{
    	echo $a * $b;
 	} 
 	else
 	{
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
 	}
 	echo PHP_EOL;	
}

function divide($a, $b) 
{
	if ($b==0) //check for zero value before dividing to trap error
  	{
  		echo "ERROR:  You cannot enter a $b for the divisor.\n";		
    } 
 if (is_numeric($a) && is_numeric($b)) //check to ensure variables are numeric
 	{
    	if ($b!=0) //check for zero value before dividing to trap error
    	{
    		echo $a / $b;
    	}
    }
    else
 	{
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
 	}
 	echo PHP_EOL;	
}
function modulus($a, $b) 
{
	if ($b==0) //check for zero value before dividing to trap error
  	{
  		echo "ERROR:  You cannot enter a $b for the divisor.\n";		
    } 
 	if (is_numeric($a) && is_numeric($b)) //check to ensure variables are numeric
 	{
    	if ($b!=0) //check for zero value before dividing to trap error
    	{
    		echo $a % $b;
    	} 
    }
    else
 	{
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
 	}
 	echo PHP_EOL;	
}

//test the functions

// add('test',2);
//modulus(["pizza","hamburgers"],1);
// multiply(20,2);
// divide(20,0);
// modulus(1,2);

