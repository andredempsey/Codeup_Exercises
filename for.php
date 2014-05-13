<?php

//This is the exercise for 
//Control Structures II
//Page: 1 of 5
//Date:  13 May 14
//Name:  Andre Dempsey
//Codeup Baddies

if ($argc>=5 && $argv[1]=="-cl") //verify there are sufficient arguments AND correct switch; filename switch start stop 
{
	$start = CheckInput($argv[2], True, $argv[0]);
	$end = CheckInput($argv[3], True, $argv[0]);
	$incrementer = CheckIncrementer($argv[4], True, $argv[0]);
}
else //no valid command line arguments
{
	// Prompt user for starting number
	fwrite(STDOUT, 'Please enter a starting number for the series => ');
	  
	// Get the input from user; check for numeric
	$start=CheckInput(trim(fgets(STDIN)),False, $argv[0]);

	// Prompt user for ending number
	fwrite(STDOUT, 'Please enter the ending number for the series => ');
	  
	// Get the input from user
	$end=CheckInput(trim(fgets(STDIN)),False, $argv[0]);

	// Prompt user for incrementer
	fwrite(STDOUT, 'Please enter the incrementer for the series => ');
	  
	// Get the input from user
	$incrementer=CheckIncrementer(trim(fgets(STDIN)), False, $argv[0]);
	
	//default incrementer to 1 if no value or invalid value
	//$incrementer = $incrementer != 0 ? $incrementer : 1;
}

//loop through the numbers
for ($i = $start; $i <= $end; $i+=$incrementer) 
{ 
	fwrite(STDOUT, "{$i}\n");	
}

function CheckInput($arg, $commandline, $file)  

//$arg is value to be checked
//$commandline is boolean to see if input is coming from command line
//$file is the file name; only used for Usage message

{
	if (is_numeric($arg)) 
	{
	
		return (int) $arg;
	} 
	elseif ($commandline) 
	{
		echo "Usage:  With command line arguments => \n php {$file} -cl [start as integer] [end as integer] [incrementer as integer] \n\n	Without command line arguments => \n php {$file}\n";
		exit(1);
	}
	else 
	{
		echo "This value must be numeric.\n";
		exit(1);
	}
}

function CheckIncrementer($arg, $commandline, $file)  

//$arg is value to be checked
//$commandline is boolean to see if input is coming from command line
//$file is the file name; only used for Usage message

{
	if (is_numeric($arg)) 
	{
		//default incrementer to 1 if no value or invalid value
		$arg = $arg != 0 ? $arg : 1;
		return (int) $arg;
	} 
	else 
	{
		//default incrementer to 1 if no value or invalid value
		$arg = $arg != 0 ? $arg : 1;
		return (int) $arg;
	}
}