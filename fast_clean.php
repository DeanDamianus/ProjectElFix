<?php
require_once('test.php');
$con = mysqli_connect("localhost", "root", "", "nyikatbuos");

if (!$con) {
    die("Koneksi Error");
}

$query = "SELECT * FROM layanan LIMIT 6";
$result = mysqli_query($con, $query);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FastClean</title>
</head>
<body>
    <h1>Fast Clean</h1>
</body>
</html>