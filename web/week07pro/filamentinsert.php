<?php

// get the data from the POST
$filament_name = $_POST['txt_filament_name'];
$filament_cost = $_POST['txt_filament_cost'];
$filament_size = $_POST['txt_filament_size'];
$filament_diameter = $_POST['txt_filament_diameter'];
$filament_vendor = $_POST['txt_filament_vendor'];
$filament_color = $_POST['txt_filament_color'];

require("connectDB.php");
$db = get_db();

try
{
	$query = 'INSERT INTO filaments(filament_name, filament_cost, filament_size, filament_diameter, filament_vendor, filament_color) VALUES(:filament_name, :filament_cost, :filament_size, :filament_diameter, :filament_vendor, :filament_color)';
	$statement = $db->prepare($query);

	$statement->bindValue(':filament_name', $filament_name);
	$statement->bindValue(':filament_cost', $filament_cost);
	$statement->bindValue(':filament_size', $filament_size);
	$statement->bindValue(':filament_diameter', $filament_diameter);
	$statement->bindValue(':filament_vendor', $filament_vendor);
	$statement->bindValue(':filament_color', $filament_color);

	$statement->execute();

}
catch (Exception $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}

header("Location: filamentadd.php");

die(); 
?>