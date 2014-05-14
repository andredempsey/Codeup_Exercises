<?php

//This is the break exercise for 
//Control Structures II
//Page: 4 of 5
//Date:  14 May 14
//Name:  Andre Dempsey
//Codeup Baddies

//loop through numbers from 1 to 100 and echo numbers but stop after 10
//use the break command

for ($i=1; $i<=100; $i++) 
{ 
	if ($i>10) 
	{
		break;
	}
	echo "$i\n";
}
