<?php


//This is the exercise for 
//Function I
//Page: 4 of 5
//Date:  16 May 14
//Name:  Andre Dempsey
//Codeup Baddies

//1. Create the program to meet the criteria set by each comment.
//2. Test and verify the output is as expected.
//3. Update the 'is set' check on $something to see if it is 'empty'. What happens?
//4. Before the first conditional, unset($nothing). What happens?


$nothing = NULL;
$something = '';
$array = array(1,2,3);

// Create a function that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"

function check_var($variable_name)
{
	if (isset($variable_name)) 
	{
		echo "variable_name is SET.\n";
	}
	if (empty($variable_name)) 
	{
		echo "variable_name is EMPTY.\n";
	}

}
unset($nothing);
// TEST: If var $nothing is set, display '$nothing is SET'
echo "TEST: If var \$nothing is set, display '\$nothing is SET'\n";
$nothing = 'not empty';
check_var($nothing);

// TEST: If var $nothing is empty, display '$nothing is EMPTY'
echo "TEST: If var \$nothing is empty, display '\$nothing is EMPTY'\n";
$nothing = NULL;
check_var($nothing);

// TEST: If var $something is set, display '$something is SET'
echo "TEST: If var \$something is set, display '\$something is SET'\n";

check_var($something);

// Serialize the array $array, and output the results
echo 'Serialize the array $array, and output the results'.PHP_EOL;
$serialized_array = serialize($array);
echo $serialized_array;
echo PHP_EOL;

// Unserialize the array $array, and output the results
echo 'Unserialize the array $array, and output the results'.PHP_EOL;
echo "Array (" . implode(",",unserialize($serialized_array)) . ")";
echo PHP_EOL;

