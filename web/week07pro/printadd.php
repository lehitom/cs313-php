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

$filaments = $db->prepare("SELECT * FROM filaments order by filament_id desc");
$filaments->execute();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Add Print Page</title>
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

  $print_name = $_POST['txt_print_name'];
$filament_amount = $_POST['txt_filament_amount'];
$stl_file_name = $_POST['txt_stl_file_name'];
$printer_id = $_POST['txt_printer_id'];
$filament_id = $_POST['txt_filament_id'];
  
	<div class="main">
      <h1>New filament entry</h1>
		<form id="mainForm" action="printinsert.php" method="POST">

		<input type="text" id="txt_print_name" name="txt_print_name"></input>
		<label for="txt_print_name">Print Name</label>
		<br /><br />

		<input type="text" id="txt_filament_amount" name="txt_filament_amount"></input>
		<label for="txt_filament_amount">Filament Amount</label>
		<br /><br />
		
		<input type="text" id="txt_stl_file_name" name="txt_stl_file_name"></input>
		<label for="txt_stl_file_name">STL File Name</label>
		<br /><br />
		
		<input type="text" id="txt_printer_id" name="txt_printer_id"></input>
		<label for="txt_printer_id">Printer ID</label>
		<br /><br />
		
		<input type="text" id="txt_filament_id" name="txt_filament_id"></input>
		<label for="txt_filament_id">Filament ID</label>
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
	  <p>--------------------------</p>
	  <h2>All filaments</h2>
        <table>
		  <?php
            foreach( $filaments as $filament ) {
              $filament_id = $filament['filament_id'];
              $filament_name = $filament['filament_name'];
              $filament_cost = $filament['filament_cost'];
			  $filament_size = $filament['filament_size'];
			  $filament_diameter = $filament['filament_diameter'];
			  $filament_vendor = $filament['filament_vendor'];
			  $filament_color = $filament['filament_color'];
          ?>
        <p><?php echo '<b>' . $filament_id . '</b> ' . $filament_vendor . ', $' . $filament_cost . ' for ' . $filament_size . ' grams '; ?></p>
		<p><?php echo '<b>"' . $filament_name . '"</b> has a diameter of ' . $filament_diameter . ' and is <b>' . $filament_color . '</b>'; ?></p>
		<p>-------------------------</p>
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