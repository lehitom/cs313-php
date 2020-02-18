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
  <title>All notes</title>
</head>
<body>
<h2>Note Search</h2>
  
  <form action="note_lookup.php" method="POST">
    <label for="search">Search By Note ID</label>
    <input type="text" name="search" placeholder="NULL">

    <button type="submit">Search</button>
  </form>

  <hr>
  
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