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

$printers = $db->prepare("SELECT printer_id, printer_name FROM printers order by printer_id desc");
$printers->execute();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Add Printer Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="week02home.css" type="text/css">
  <meta name="description" content="3D note and database tracking">
</head>
<body>
  <header>
    <div class="header-content">
      <div class="header-content-main">
        <h1>Add New Filament</h1>
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
      <h1>New Printer entry</h1>
		<form id="mainForm" action="printerinsert.php" method="POST">

		<input type="text" id="txt_printer_name" name="txt_printer_name"></input>
		<label for="txt_printer_name">Printer Name</label>
		<br /><br />
		
		<input type="submit" value="Add to Database" />

		</form>
	</div>
	
    <div class="side">
      <h2>All printers</h2>
        <table>
		  <?php
            foreach( $printers as $printer ) {
              $printer_id = $printer['printer_id'];
			  $printer_name = $printer['printer_name'];
          ?>
        <p><?php echo '<b>' . $printer_id . '</b> ' . $printer_name; ?></p>
        <?php
      }
    ?>
        </table>
	</div>
  </div>

   <footer>
    <div class="footer">
      <h2>CS 313 - Shawn Porter - Thomas Wood - Web Engineering II</h2>
    </div>
  </footer>
  
</body>
</html>