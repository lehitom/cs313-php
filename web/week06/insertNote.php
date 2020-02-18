<?php

// get the data from the POST
$note = $_POST['txtNoteId'];
$print = $_POST['txtPrintId'];
$note_fill = $_POST['txtContent'];

require("dbConnect.php");
$db = get_db();

try
{
	$query = 'INSERT INTO notes(note_id, print_id, note_fill) VALUES(:note, :print, :note_fill)';
	$statement = $db->prepare($query);

	$statement->bindValue(':note', $note);
	$statement->bindValue(':print', $print);
	$statement->bindValue(':note_fill', $note_fill);

	$statement->execute();

}
catch (Exception $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}

header("Location: notedump.php");

die(); 
?>