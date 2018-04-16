<?php
session_start();
if (isset($_SESSION['loggedin'])){
    // talletetaan tieto muuttujaan, jotta helpompi käyttää myöhemmin html-koodissa
    $loggedin = $_SESSION['loggedin'];
} else {
    // ei kirjautunut, ohjaa login-sivulle
    header('Location: '.'kirjaudu');
}

?>
<html>
    <head>
	<!-- Ohjaa sivulle -->
        <meta http-equiv="refresh" content="0;url=/dohtuproj/"/>
		<style>
		h1 {
			font-size: 60px;
			position: absolute;
		}
		</style>
    </head>
    <body>
	<center>
 
		</center>
    </body>
</html>