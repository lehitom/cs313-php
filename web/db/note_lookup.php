<?php
require ('connectDB.php');
$db = get_db();

$search = $_POST["search"];

$search_statement = $db->prepare('SELECT * FROM notes WHERE note_id=:note_id');
$search_statement->bindValue(':note_id', $search, PDO::PARAM_STR);
$search_statement->execute();
$rows = $search_statement->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Note Details</title>
</head>
<body>
  <h1>Note Search Results</h1>
  
  <?php 
  if ($rows) {
    foreach( $rows as $search_result ) {
      $note_id = $search_result['note_id'];
      $note_fill = $search_result['note_fill'];
      $print_id = $search_result['print_id'];
  ?>
    <a href="note_results.php?id=<?php echo $note_id; ?>"><?php echo 'Note: ' . $note_id . ' by printer ID: ' . $print_id; ?></a><br>
  <?php 
    }
  } else {
    ?>
    <p>No results found.</p>
    <?php 
  }
  ?>
</body>
</html>