<?php
session_start();
if(isset($_SESSION['myusername']))
{
    $username = $_SESSION['myusername'];
}
else
{
    header("Location: login.php");
}

require("connectDB.php");
$db = get_db();

$notes = $db->prepare("SELECT note_id, note_fill, print_id FROM notes order by NOTE_ID desc LIMIT 10");
$notes->execute();

$prints = $db->prepare("SELECT print_id, print_name, filament_amount FROM prints order by print_id desc LIMIT 10");
$prints->execute();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title><?php echo $username; ?>'s Addition Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="week02home.css" type="text/css">
  <meta name="description" content="3D note and database tracking">
</head>
<body>
  <header>
    <div class="header-content">
      <div class="header-content-main">
        <h1>Additions</h1>
        <h2>3D printing print tracker</h2>
      </div>
    </div>
  </header>

  <div class="navbar">
    <a href="index.php">Homepage</a>
    <a href="addmultiple.php">Additions</a>
	<a href="logout.php"><b>LOGOUT</b></a>
  </div>

  <div class="row">
    
	<div class="main">
      <h2>Print addition</h2>
      <a href="printadd.php">Add new Print</a> <br><br>
	  
	  <h2>Note addition</h2>
      <a href="noteadd.php">Add new Note</a> <br><br>
	  
	  <h2>Filament addition</h2>
      <a href="filamentadd.php">Add new Filament</a> <br><br>
	  
	  <h2>Printer addition</h2>
      <a href="printadd.php">Add new Printer</a> <br><br>
	</div>
	
    <div class="side">
      <h2>Order of additions from fresh start</h2><br>
      <h4>1. Filament</h4><br>
	  <h4>2. Printer</h4><br>
	  <h4>3. Print</h4><br>
	  <h4>4. Note</h4><br>
	</div>
  </div>

   <footer>
    <div class="footer">
      <h2>CS 313 - Shawn Porter - Thomas Wood - Web Engineering II</h2>
    </div>
  </footer>
  
</body>
</html>