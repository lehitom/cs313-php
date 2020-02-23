<?php

// get the data from the POST
$filament_name = $_POST['txt_filament_name'];
$filament_cost = $_POST['txt_filament_cost'];
$filament_size = $_POST['txt_filament_size'];
$filament_diameter = $_POST['txt_filament_diameter'];
$filament_vendor = $_POST['txt_filament_vendor'];
$filament_color = $_POST['txt_filament_color'];

require("dbConnect.php");
$db = get_db();



header("Location: filamentadd.php");

die(); 
?>