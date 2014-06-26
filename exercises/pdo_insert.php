<?php 

// Get new instance of PDO object
$dbc = new PDO('mysql:host=127.0.0.1;dbname=codeup_pdo_test_db', 'daniel', 'letmein');

// Tell PDO to throw exceptions on error
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Create the query and assign to var
$query = 'CREATE TABLE national_parks (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    location VARCHAR(100) NOT NULL,
    date_established DATE NOT NULL,
    area_in_acres FLOAT NOT NULL, 
    PRIMARY KEY (id)
)';

// Run query, if there are errors they will be thrown as PDOExceptions
$dbc->exec($query);

// ----------------------------------------------------------------

$national_parks = [
    ['name' => 'Acadia',   'location' => 'Maine', 'date_established' => '1919-02-26', 'area_in_acres' => '47389.67'],
    ['name' => 'America Samoa',   'location' => 'American Samoa', 'date_established' => '1988-10-31', 'area_in_acres' => '9000.00'],
    ['name' => 'Arches',   'location' => 'Utah', 'date_established' => '1971-11-12', 'area_in_acres' => '76518.98'],
    ['name' => 'Badlands',   'location' => 'South Dakota', 'date_established' => '1978-11-10', 'area_in_acres' => '242755.94'],
    ['name' => 'Big Bend',   'location' => 'Texas', 'date_established' => '1944-06-12', 'area_in_acres' => '801163.21'],
    ['name' => 'Biscayne',   'location' => 'Florida', 'date_established' => '1980-06-28', 'area_in_acres' => '172924.07 '],
    ['name' => 'Black Canyone of the Gunnison',   'location' => 'Colorado', 'date_established' => '1999-10-21', 'area_in_acres' => '32950.03 '],
    ['name' => 'Bryce Canyon',   'location' => 'Utah', 'date_established' => '1928-02-12', 'area_in_acres' => '35835.08'],
    ['name' => 'Canyon Lands',   'location' => 'Utah', 'date_established' => '1964-09-12', 'area_in_acres' => '337597.83'],
    ['name' => 'Capitol Reef',   'location' => 'New Mexico', 'date_established' => '1971-12-18', 'area_in_acres' => '241904.26 ']
];

foreach ($national_parks as $national_park) {
    $query = "INSERT INTO national_parks (name, location, date_established, area_in_acres) 
    	VALUES ('{$national_park['name']}', '{$national_park['location']}', 
    		'{$national_park['date_established']}', '{$national_park['area_in_acres']}')";

    $dbc->exec($query);

    echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
}







 ?>