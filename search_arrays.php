<?php

//This is the exercise for 
//Array Functions (searching arrays)
//Page: 2 of 4
//Date:  19 May 14
//Name:  Andre Dempsey
//Codeup Baddies



// first names
$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];


function findname($searchstring,$targetarray)
{
	if (array_search($searchstring,$targetarray)!== FALSE) 
	{	
		return "TRUE";
	}
	else
	{
		return "FALSE";
	}
}

//find 'Tina' in $names array
echo findname("Tina",$names);
echo PHP_EOL;

//find 'Bob' in $names array
echo findname("Bob",$names);
echo PHP_EOL;


function compare_arrays($array1, $array2,$show_matches=false)
//Create a function to compare 2 arrays that returns the number of values in common between the arrays. 
// Use the 2 example arrays and make sure your solution uses array_search().
//$show_matches allows matching values to be returned; default is 'false'
{
$matches=0;
$matchingvalues='';
	foreach ($array1 as $key => $value) 
	{
		if (array_search($value, $array2)!==FALSE) 
		{
			$matchingvalues.=$value. " ";	
			$matches++;
		}
	}
	$matcharray=array($matches,$matchingvalues);
	if ($show_matches) 
	{
		return $matcharray;
	}
	else
	{
	return $matches;
	}
}


echo "There are ".compare_arrays($names, $compare). " items in common between the two arrays.\n";

$matches = (compare_arrays($names, $compare,True));
// print_r($matches);

echo "There are " . $matches[0] . " and they are (" . $matches[1] . ")\n";
