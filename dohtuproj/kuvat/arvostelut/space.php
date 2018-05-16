<?php

// ARVOSTELU
// SPACE.PHP
// EI OLE
// SAMA

session_start();
if (isset($_SESSION['loggedin'])) {
    // talletetaan tieto muuttujaan, jotta helpompi käyttää myöhemmin html-koodissa
    $loggedin = $_SESSION['loggedin'];
} else {
    // ei kirjautunut, ohjaa login-sivulle
    header('Location: ' . 'login');
}


?>