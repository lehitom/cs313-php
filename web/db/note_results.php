<?php
require ('connectDB.php');
$db = get_db();

$id = $_GET["id"];

$search_statement = $db->prepare('SELECT * FROM notes WHERE note_id=:id');
$search_statement->bindValue(':id', $id, PDO::PARAM_STR);
$search_statement->execute();
$row = $search_statement->fetch(PDO::FETCH_ASSOC);
$content = $row['note_fill'];

function getTitle($row) {
    $note_id = $row['note_id'];
    $note_fill = $row['note_fill'];
    $print_id = $row['print_id'];
    return "Note: $note_id by Printer: $print_id";
}

$header = getTitle($row);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $header; ?></title>
</head>
<body>
    <h1><?= $header; ?></h1>
    <p><?= $content; ?></p>
</body>
</html>