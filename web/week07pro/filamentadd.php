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

$filaments = $db->prepare("SELECT * FROM filaments order by filament_id");
$filaments->execute();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Add Filament Page</title>
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
  
	</div>
	
    <div class="side">
      <h2>All current filaments</h2>
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
        <p><?php echo "<b>" . $filament_id . '</b> from ' . $filament_vendor . ' cost ' . $filament_cost . ' for ' . $filament_size . ' grams. '; ?></p>
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