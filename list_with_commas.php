<?php


//This is the exercise for 
//Array Functions
//Page: 4 of 4
//Date:  20 May 14
//Name:  Andre Dempsey
//Codeup Baddies

//1.  convert our $physicists_array into a human friendly $famous_fake_physicists string.
//2.  Turn your solution into a function named humanized_list(). 
//You should be able to pass the $physicists_array as the only argument, and your function will return the result array as a string

$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

function humanized_list($physicists_array)
{
	//retrieve last item
	$last_item=array_pop($physicists_array);

	//modify last item
	$last_item="and ".$last_item;

	//push last item back onto array
	array_push($physicists_array, $last_item);

	//revert array to string with single pipe delimiter
	return implode(', ', $physicists_array);
}

//turn string into array
$physicists_array = explode(', ', $physicists_string);

$famous_fake_physicists = humanized_list($physicists_array);

//output result
echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}.";
echo PHP_EOL;


