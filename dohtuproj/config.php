<?php

// tietokanta tiedot
$servername = "Opetus1:3306";
$dbname = "s1600988";
$username = "s1600988";
$password = "8HOmCcn1";

// yhteys tietokantaan
$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
?>