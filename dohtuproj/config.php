<?php

// tietokanta tiedot
$servername = "localhost";
$dbname = "dohtuproj";
$username = "root";
$password = "";

// yhteys tietokantaan
$connection = new mysqli("localhost", "root", "", "dohtuproj");

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
?>