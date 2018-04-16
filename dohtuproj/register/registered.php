<?php

$name = htmlspecialchars($_POST["name"]);
$surname = htmlspecialchars($_POST["surname"]);
$username = htmlspecialchars($_POST["username"]);
$password = htmlspecialchars($_POST["password"]);
$email = htmlspecialchars($_POST["email"]);

//ottaa salasanan lomakkeesta ja "salaa" sen
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

try {
	// yhteys tietokantaan
$connection = new PDO("mysql:host=localhost;dbname=dohtuproj", "root", "");

$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// syöttää saadut tiedot lomakkeesta tietokantaan
$query = $connection->prepare("INSERT INTO kayttajat(name, surname, username, password, email) VALUES(?,?,?,?,?)");

$query->execute(array($name, $surname, $username, $hashed_password, $email));


echo "";
} catch (PDOException $e) {
die("VIRHE: " . $e->getMessage());
}
// sulkee yhteyden
$connection = null;
?>

<html>
    <head>
	<!-- Ohjaa sivulle -->
        <meta http-equiv="refresh" content="0;url=/dohtuproj/kirjaudu"/>
		<link rel="stylesheet" href="logout.css">
		<style>
		h1 {
			font-size: 60px;
			position: absolute;
		}
		</style>
		
    </head>
    <body>
	<nav>
	</nav>
	<center>
        
		</center>
    </body>
</html>