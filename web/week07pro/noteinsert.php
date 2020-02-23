<?php

// get the data from the POST
$print = $_POST['txtPrintId'];
$note_fill = $_POST['txtContent'];

require("dbConnect.php");
$db = get_db();

try
{
	$query = 'INSERT INTO notes(print_id, note_fill) VALUES(:print, :note_fill)';
	$statement = $db->prepare($query);

	$statement->bindValue(':print', $print);
	$statement->bindValue(':note_fill', $note_fill);

	$statement->execute();

}
catch (Exception $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}

header("Location: noteadd.php");

die(); 
?>