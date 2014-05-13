<?php

//Fizz Buzz Program
//Page: 1 of 5
//Date:  13 May 14
//Name:  Andre Dempsey
//Codeup Baddies

//loop through the numbers
for ($i = 1; $i <= 100; $i++) 
{ 
	if ($i%3 !=0 && $i%5!=0) // numbers that are not multiples of 3 or 5
	{
		echo $i;
	}
	else
	{
		if ($i%3==0) //numbers that are multiples of 3
		{
			echo 'Fizz';
		}
		if ($i%5==0) //numbers that are multiples of 5
		{
			echo 'Buzz';
		}
	}	
	echo "\n";
}

