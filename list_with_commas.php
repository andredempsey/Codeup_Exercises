<?php


//This is the exercise for 
//Array Functions
//Page: 4 of 4
//Date:  20 May 14
//Name:  Andre Dempsey
//Codeup Baddies

//1.  convert our $physicists_array into a human friendly $famous_fake_physicists string.

//array as a string
$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

//turn string into array
$physicists_array = explode(', ', $physicists_string);

//retrieve last item
$last_item=array_pop($physicists_array);

//modify last item
$last_item="and ".$last_item;

//push last item back onto array
array_push($physicists_array, $last_item);

//revert array to string with single pipe delimiter
$famous_fake_physicists = implode(', ', $physicists_array);

//output result
echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}.";
echo PHP_EOL;


