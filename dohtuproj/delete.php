<?php
session_start();
ini_set('default_charset', 'utf-8');
if (isset($_SESSION['loggedin'])) {
    // talletetaan tieto muuttujaan, jotta helpompi käyttää myöhemmin html-koodissa
    $loggedin = $_SESSION['loggedin'];
} else {
    // ei kirjautunut, ohjaa login-sivulle
    header('Location: ' . 'kirjaudu');
}

include 'config.php';

$id = $_GET['kommentti_ID']; 

if(isset($_GET['kommentti_ID'])) {
   $query = "DELETE FROM kommentti WHERE kommentti_ID = " . $id . "";
   $result = mysqli_query($connection, $query);
    if(($result) === TRUE ) {
       
    }
} else {
    echo 'Virhe';
}
$connection->close();
header('Location: user.php');
?> 