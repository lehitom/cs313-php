<?php

// get the data from the POST
$printer_name = $_POST['txt_printer_name'];

require("connectDB.php");
$db = get_db();

try
{
	$query = 'INSERT INTO printers(printer_name, is_dual) VALUES(:printer_name, false)';
	$statement = $db->prepare($query);

	$statement->bindValue(':printer_name', $printer_name);

	$statement->execute();

}
catch (Exception $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}

header("Location: printeradd.php");

die(); 
?>