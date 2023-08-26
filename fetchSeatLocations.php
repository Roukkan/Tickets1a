<?php
// fetchSeatLocations.php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "u548574294_laravel";


$connection = new mysqli($hostname, $username, $password, $database);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$query = "SELECT seat_location FROM booking";
$result = $connection->query($query);

$seatLocations = [];
while ($row = $result->fetch_assoc()) {
    $seatLocations[] = $row['seat_location'];
}

$connection->close();
?>