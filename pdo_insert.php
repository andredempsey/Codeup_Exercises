<?php 


// Get new instance of PDO object
$dbc = new PDO('mysql:host=127.0.0.1;dbname=codeup_pdo_test_db', 'andre', 'password');

// Tell PDO to throw exceptions on error
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

// Create the query and assign to var
// $query = 'CREATE TABLE national_parks (
//     id INT UNSIGNED NOT NULL AUTO_INCREMENT,
//     name VARCHAR(50) NOT NULL,
//     location VARCHAR(240) NOT NULL,
//     date_established DATE NOT NULL,
//     area_in_acres DECIMAL NOT NULL,
//     PRIMARY KEY (id)
// )';

// $dbc->exec($query);

$parks = [
    ['name'=>'Acadia', 'location'=>'Maine', 'date_established'=>'February 26, 1919', 'area_in_acres'=>47389.67 ],
    ['name'=>'American Samoa', 'location'=>'American Samoa', 'date_established'=>'October 31, 1988', 'area_in_acres'=>9000 ],
    ['name'=>'Arches', 'location'=>'Utah', 'date_established'=>'November 12, 1971', 'area_in_acres'=>76518.98 ],
    ['name'=>'Badlands', 'location'=>'South Dakota', 'date_established'=>'November 10, 1978', 'area_in_acres'=>242755.94 ],
    ['name'=>'Big Bend', 'location'=>'Texas', 'date_established'=>'June 12, 1944', 'area_in_acres'=>801163.21 ],
    ['name'=>'Biscayne', 'location'=>'Florida', 'date_established'=>'June 28, 1980', 'area_in_acres'=>172924.07 ],
    ['name'=>'Black Canyon of the Gunnison', 'location'=>'Colorado', 'date_established'=>'October 21, 1999', 'area_in_acres'=>32950.03 ],
    ['name'=>'Bryce Canyon', 'location'=>'Utah', 'date_established'=>'February 25, 1928', 'area_in_acres'=>35835.08 ],
    ['name'=>'Canyonlands', 'location'=>'Utah', 'date_established'=>'September 12, 1964', 'area_in_acres'=>337597.83 ],
    ['name'=>'Capitol Reef', 'location'=>'Utah', 'date_established'=>'December 18, 1971', 'area_in_acres'=>241904.26 ]

];

foreach ($parks as $park)
{
	
	$query = "INSERT INTO national_parks (name, location, date_established, area_in_acres) 
	VALUES ('{$park['name']}', '{$park['location']}', STR_TO_DATE('" . $park['date_established'] . "','%M %d,%Y'), '{$park['area_in_acres']}')";
	$dbc->exec($query);

 	echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
}

 ?>