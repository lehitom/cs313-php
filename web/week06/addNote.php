<?php

require("dbConnect.php");
$db = get_db();

$notes = $db->prepare("SELECT note_id, note_fill, print_id FROM notes order by NOTE_ID desc");
$notes->execute();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Add Additional Notes</title>
</head>
<body>

<h1>New note entry</h1>
<form id="mainForm" action="insertNote.php" method="POST">

	<input type="number" id="txtNoteId" name="txtId"></input>
	<label for="txtId">Note ID</label>
	<br /><br />

	<input type="number" id="txtPrintId" name="txtVerse"></input>
	<label for="txtVerse">Print ID</label>
	<br /><br />
	
	<label for="txtContent">Content:</label><br />
	<textarea id="txtContent" name="txtContent" rows="4" cols="50"></textarea>
	<br /><br />
	
<input type="submit" value="Add to Database" />

</form>


</div>


<h1>All notes</h1>
  <table>
    <?php
      foreach( $notes as $note ) {
        $note_id = $note['note_id'];
        $note_fill = $note['note_fill'];
        $print_id = $note['print_id'];
        ?>
        <p><a href="note_results.php?id=<?php echo $note_id; ?>"><?php echo "Note: " . $note_id . ' "' . $note_fill . '"<b> for print: </b>' . $print_id; ?></a></p>
        <?php
      }
    ?>
  </table>
  
</body>