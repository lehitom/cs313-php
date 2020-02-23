<?php

// get the data from the POST
$print_name = $_POST['txt_print_name'];
$filament_amount = $_POST['txt_filament_amount'];
$stl_file_name = $_POST['txt_stl_file_name'];
$printer_id = $_POST['txt_printer_id'];
$filament_id = $_POST['txt_filament_id'];

require("connectDB.php");
$db = get_db();

try
{
	$query = 'INSERT INTO prints(print_name, filament_amount, stl_file_name, printer_id, filament_id) VALUES(:print_name, :filament_amount, :stl_file_name, :printer_id, :filament_id)';
	$statement = $db->prepare($query);

	$statement->bindValue(':print_name', $print_name);
	$statement->bindValue(':filament_amount', $filament_amount);
	$statement->bindValue(':stl_file_name', $stl_file_name);
	$statement->bindValue(':printer_id', $printer_id);
	$statement->bindValue(':filament_id', $filament_id);

	$statement->execute();

}
catch (Exception $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}

header("Location: printadd.php");

die(); 
?>