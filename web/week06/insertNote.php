<?php

// get the data from the POST
$note = $_POST['txtNoteId'];
$print = $_POST['txtPrintId'];
$content = $_POST['txtContent'];

require("dbConnect.php");
$db = get_db();

try
{
	// Add the Scripture

	// We do this by preparing the query with placeholder values
	$query = 'INSERT INTO notes(note_id, print_id, note_fill) VALUES(:note, :print, :content)';
	$statement = $db->prepare($query);

	// Now we bind the values to the placeholders. This does some nice things
	// including sanitizing the input with regard to sql commands.
	$statement->bindValue(':note', $note);
	$statement->bindValue(':print', $print);
	$statement->bindValue(':content', $content);

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