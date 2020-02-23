<?php
require("connectDB.php");
$db = get_db();

$notes = $db->prepare("SELECT note_id, note_fill, print_id FROM notes order by NOTE_ID desc LIMIT 10");
$notes->execute();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>'s Home Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="week02home.css" type="text/css">
  <meta name="description" content="3D note and database tracking">
</head>
<body>
  <header>
    <div class="header-content">
      <div class="header-content-main">
        <h1>'s Homepage</h1>
        <h2>3D printing print tracker</h2>
      </div>
    </div>
  </header>

  <div class="navbar">
    <a href="links.html">Homepage</a>
    <a href="links.html">Additions</a>
    <a href="links.html">Newest Additions</a>
	<a href="logout.php"><b>LOGOUT</b></a>
  </div>

  <div class="row">
    
    <div class="main">
      <h2>Past 10 most recent notes</h2>
    </div>
  </div>

</body>
</html>