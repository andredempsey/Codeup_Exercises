<?php 


//Foreach 
//Page: 2 of 5
//Date:  13 May 14
//Name:  Andre Dempsey
//Codeup Baddies


//read in array
$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);
//iterate through each value and output types {integer, float, boolean, array, null, or string}

foreach ($things as  $thing) 
{

if (is_integer($thing))  //check for integer value
{
	echo "$thing is of type integer\n";
}
elseif (is_float($thing))  //check for float value
{
	echo "$thing is of type float\n";
}
elseif (is_bool($thing))  //check for boolean value
{
	if ($thing) 
	{
		echo "true is of type boolean\n";
	}
	else
	{
		echo "false is of type boolean\n";
	}
}
elseif (is_array($thing))  //check for array value
{
	echo "array(";
	foreach ($thing as $subthing) 
	{
		echo " " . $subthing;
	}
	echo ") is of type array\n";
}
elseif (is_null($thing))  //check for null value
{
	echo "null is of type null\n";
}
elseif (is_string($thing))  //check for string value
{
	echo "$thing is of type string\n";
}

}

