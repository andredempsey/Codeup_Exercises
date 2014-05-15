<?php

//This is the exercise for 
//Functions I
//Page: 2 of 5
//Date:  15 May 14
//Name:  Andre Dempsey
//Codeup Baddies

//1. Validate all the arguments, and display an error if the input is not numeric.

function add($a, $b) 
{
	if (is_numeric($a) && is_numeric($b)) //check to ensure variables are numeric
	{
    	echo $a + $b;
    	echo PHP_EOL;
 	} 
 	else
 	{
 		echo "ERROR:  Please limit your inputs to numeric values.";
 		echo PHP_EOL;	
 	}
}

function subtract($a, $b) 
{
if (is_numeric($a) && is_numeric($b)) //check to ensure variables are numeric
	{
    	echo $a - $b;
    	echo PHP_EOL;
 	} 
 	else
 	{
 		echo "ERROR:  Please limit your inputs to numeric values.";
 		echo PHP_EOL;	
 	}
}

function multiply($a, $b) 
{
 if (is_numeric($a) && is_numeric($b)) //check to ensure variables are numeric
	{
    	echo $a * $b;
    	echo PHP_EOL;
 	} 
 	else
 	{
 		echo "ERROR:  Please limit your inputs to numeric values.";
 		echo PHP_EOL;	
 	}
}

function divide($a, $b) 
{
 if (is_numeric($a) && is_numeric($b)) //check to ensure variables are numeric
	{
    	echo $a / $b;
    	echo PHP_EOL;
 	} 
 	else
 	{
 		echo "ERROR:  Please limit your inputs to numeric values.";
 		echo PHP_EOL;	
 	}
}

function modulus($a, $b) 
{
 if (is_numeric($a) && is_numeric($b)) //check to ensure variables are numeric
	{
    	echo $a % $b;
    	echo PHP_EOL;
 	} 
 	else
 	{
 		echo "ERROR:  Please limit your inputs to numeric values.";
 		echo PHP_EOL;	
 	}
}

//test the functions

add('test',2);
subtract(20,2);
multiply(20,2);
divide(20,2);
modulus(1,2);

