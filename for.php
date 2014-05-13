<?php

//This is the exercise for 
//Control Structures II
//Page: 1 of 5
//Date:  12 May 14
//Name:  Andre Dempsey
//Codeup Baddies

// Prompt user for starting number
fwrite(STDOUT, 'Please enter a starting number for the series => ');
  
// Get the input from user
 $start=(int)fgets(STDIN);

// Prompt user for ending number
fwrite(STDOUT, 'Please enter the ending number for the series => ');
  
// Get the input from user
$end=(int)fgets(STDIN);

// Prompt user for incrementer
fwrite(STDOUT, 'Please enter the incrementer for the series => ');
  
// Get the input from user
$incrementer=(int)fgets(STDIN);

//default incrementer to 1 if no value or invalid value
$incrementer = $incrementer != 0 ? $incrementer : 1;

//loop through the numbers
for ($i = $start; $i <= $end; $i+=$incrementer) 
{ 
	fwrite(STDOUT, "{$i}\n");	
}

