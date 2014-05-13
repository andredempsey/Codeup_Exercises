<?php 


//Foreach 
//Page: 2 of 5
//Date:  13 May 14
//Name:  Andre Dempsey
//Codeup Baddies


//read in array
$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);
//iterate through each value and echo out every value, including those nested in arrays
foreach ($things as  $thing) 
{
	
	
	if (is_array($thing))  //check for array value
	{
		echo "Array(";
		foreach ($thing as $subthing) 
		{
			echo "{$subthing} ";
		}
		echo ") or {using IMPLODE} ";
		$altsubthing = implode(",", $thing);
		echo "Array({$altsubthing})\n"; 
	}
	else
	{
		echo "{$thing}\n";
	}
}