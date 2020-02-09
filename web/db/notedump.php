<?php

require("connectDB.php");
$db = get_db();

$notes = $db->prepare("SELECT note_id, note_fill, print_id FROM notes");
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
<h1>All notes</h1>
  <table>
    <?php
      foreach( $notes as $note ) {
        $note_id = $note['note_id'];
        $note_fill = $note['note_fill'];
        $print_id = $note['print_id'];
        ?>
        <p><a href="note_info.php?id=<?php echo $note_id; ?>"><?php echo $note_id . ' "' . $note_fill . '" /n<b> performed by printer: </b>' . $print_id; ?></a></p>
        <?php
      }
    ?>
  </table>

  <hr>
  
  <h2>Note Search</h2>
  
  <form action="search1.php" method="POST">
    <label for="search">Search By Note ID</label>
    <input type="text" name="search" placeholder="NULL">

    <button type="submit">Search</button>
  </form>
  
  <h2>Print Search</h2>
  
  <form action="search2.php" method="POST">
    <label for="search">Search By Print ID</label>
    <input type="text" name="search" placeholder="NULL">

    <button type="submit">Search</button>
  </form>

</body>