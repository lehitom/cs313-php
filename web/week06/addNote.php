<?php

require("connectDB.php");
$db = get_db();

$notes = $db->prepare("SELECT note_id, note_fill, print_id FROM notes order by NOTE_ID desc");
$notes->execute();

?>






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