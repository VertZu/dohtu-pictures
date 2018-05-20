<?php
session_start();
if (isset($_SESSION['loggedin'])) {
    // talletetaan tieto muuttujaan, jotta helpompi käyttää myöhemmin html-koodissa
    $loggedin = $_SESSION['loggedin'];
} else {
    // ei kirjautunut, ohjaa login-sivulle
    header('Location: ' . 'kirjaudu');
}

$servername = "localhost";
$dbname = "dohtuproj";
$username = "root";
$password = "";

$connection = new mysqli("localhost", "root", "", "dohtuproj");
// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$id = $_GET['kuva_ID']; 

if(isset($_GET['kuva_ID'])) {
   $query = "DELETE FROM kuva WHERE kuva_ID = " . $id . "";
   $result = mysqli_query($connection, $query);
    if($result)
        echo "Onnistui";

} else {
    echo 'Virhe';
}
$connection->close();
header('Location: user.php');
?> 