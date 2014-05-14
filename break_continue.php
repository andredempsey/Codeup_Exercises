<?php

//This is the continue exercise for 
//Control Structures II
//Page: 4 of 5
//Date:  14 May 14
//Name:  Andre Dempsey
//Codeup Baddies

//loop through numbers from 1 to 100 and echo even numbers
//use the continue command

for ($i=1; $i<=100; $i++) 
{ 
	if ($i%2!=0) 
	{
		continue;
	}
		echo "$i\n";
}
