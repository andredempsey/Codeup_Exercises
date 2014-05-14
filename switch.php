<?php
//This is the switch exercise for 
//Control Structures II
//Page: 5 of 5
//Date:  14 May 14
//Name:  Andre Dempsey
//Codeup Baddies


// Set the default timezone
date_default_timezone_set('America/Chicago');

// Get Day of Week as number
// 1 (for Monday) through 7 (for Sunday)
$day_of_week = date('N');

echo date('l jS \of F Y h:i:s A');
echo "\n\n";
echo "Output from switch logic =>\n";

switch($day_of_week) 
{
    case 1:
        echo "Monday\n";
        break;
    case 2:
        echo "Tuesday\n";
        break;
    case 3:
        echo "Wednesday\n";
        break;
    case 4:
        echo "Thursday\n";
        break;
    case 5:
        echo "Friday\n";
        break;
    case 6:
        echo "Saturday\n";
        break;
    case 7:
        echo "Sunday\n";
        break;
    
}
echo "\n\n";
echo "Output from if and elseif logic =>\n";

//add if and elseif statements to verify output

if ($day_of_week==1) 
{
	echo "Monday\n";
}
elseif ($day_of_week==2) 
{
	echo "Tuesday\n";
}
elseif ($day_of_week==3) 
{
	echo "Wednesday\n";
}
elseif ($day_of_week==4) 
{
	echo "Thursday\n";
}
elseif ($day_of_week==5) 
{
	echo "Friday\n";
}
elseif ($day_of_week==6) 
{
	echo "Saturday\n";
}
else
{
	echo "Sunday\n";
}