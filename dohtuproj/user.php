<?PHP
session_start();
if (isset($_SESSION['loggedin'])) {
    // talletetaan tieto muuttujaan, jotta helpompi käyttää myöhemmin html-koodissa
    $loggedin = $_SESSION['loggedin'];
} else {
    // ei kirjautunut, ohjaa login-sivulle
    header('Location: ' . 'kirjaudu');
}

$id = $_SESSION["ID"];

$servername = "localhost";
$dbname = "dohtuproj";
$username = "root";
$password = "";

$connection = new mysqli("localhost", "root", "", "dohtuproj");

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$result = $connection->query("SELECT * FROM kuva WHERE userID = '$id'");






$connection->close();
?>
<!DOCTYPE html>
<html>
    <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Kuvat</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="res/css/fix.css"/>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400italic,400,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

    </head>
    <body>
        <nav id="yo">
            <ul id="menu">
                  <div class="dropdown">
                    <button id="dropbtn" class="DltClr"><a href="/dohtuproj/">Kuvat</a></button>
                    
                    
                    <div class="dropdown-content">
                    <a href="kuvat/space.php">Avaruus</a>
                    <a href="kuvat/tiger.php">Tiikeri</a>
                    <a href="kuvat/squirrel.php">Orava</a>
                    <a href="kuvat/doggo.php">Koira</a>
                    <a href="kuvat/anime.php">Anime</a>
                </div>
                </div>
		<li id="right"><a href="./logout">Kirjaudu ulos</a></li>
                <li id="right"><a class="active" href="user.php">Hei, <?php echo $_SESSION["loggedin"]; ?></a></li>
            </ul>
        </nav>
        
        <h1 id="night" class="move">Omat arvostelut</h1>
		<?php
		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				echo '<td><div id="night"><strong>' . $row["nimi"] . '</strong>    ' .$row["arvio"] . ' arvosana<div id="night2">' .$row["kommentti"] . '</div><a onclick="return confirm("Delete this record?"") href="delete.php?kuva_ID=' .$row["kuva_ID"]. '" class="delete">   Poista</a></td></div><br><br>';
			}
		}
				?>
		
		<script src="nightmode.js"></script>
                <script>$('a.delete').on('click', function() {
    var choice = confirm('Haluatko varmasti poistaa tämän kommentin?');
    if(choice === true) {
        return true;
    }
    return false;
});</script>
                    
	</body>