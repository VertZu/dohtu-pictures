<?php

// sulkee loggedin sessionin - elikkä kirjaa sinut ulos
session_start();
unset($_SESSION["loggedin"]); 
header('Location: '.' logout.php');
?>