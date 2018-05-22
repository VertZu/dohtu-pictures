<?PHP
session_start();
ini_set('default_charset', 'utf-8');
if (isset($_SESSION['loggedin'])) {
    // talletetaan tieto muuttujaan, jotta helpompi käyttää myöhemmin html-koodissa
    $loggedin = $_SESSION['loggedin'];
} else {
    // ei kirjautunut, ohjaa login-sivulle
    header('Location: ' . 'kirjaudu');
}
?>
<!DOCTYPE html>
<html>
    <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Kuvat</title>
<link rel="stylesheet" type="text/css" media="screen" href="res/css/style.css"/>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400italic,400,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

    </head>
    <body>
        <nav id="yo">
            <ul id="menu">
                <div class="dropdown">
                    <button id="dropbtn"><a class="active"  href="../dohtuproj">Kuvat</a></button>
                    
                    
                    <div class="dropdown-content">
                    <a href="kuvat/space.php">Avaruus</a>
                    <a href="kuvat/tiger.php">Tiikeri</a>
                    <a href="kuvat/squirrel.php">Orava</a>
                    <a href="kuvat/doggo.php">Koira</a>
                    <a href="kuvat/anime.php">Anime</a>
                </div>
                </div>
            
               
				<li id="right"><a href="logout">Kirjaudu ulos</a></li>
                <li id="right"><a href="user.php">Hei, <?php echo $_SESSION["loggedin"]; ?></a></li>
            </ul>
        </nav>

		
		<!-- Kuvakaruselli -->
<div class="container">
	<div id="content-slider">
    	<div id="slider">
        	<div id="mask">
            <ul>
           	<li id="first" class="firstanimation">
            <a href="#">
            <img src="images/space.jpg" alt="Avaruus"/>
            </a>
            <div class="tooltip">
            <h1>Avaruus</h1>
            </div>
            </li>

            <li id="second" class="secondanimation">
            <a href="#">
            <img src="images/tiger.jpg" alt="Tiger"/>
            </a>
            <div class="tooltip">
            <h1>Tiger</h1>
            </div>
            </li>
            
            <li id="third" class="thirdanimation">
            <a href="#">
            <img src="images/squirrel.jpg" alt="Orava"/>
            </a>
            <div class="tooltip">
            <h1>Orava</h1>
            </div>
            </li>
                        
            <li id="fourth" class="fourthanimation">
            <a href="#">
            <img src="images/doggo.jpg" alt="Koira"/>
            </a>
            <div class="tooltip">
            <h1>Koira</h1>
            </div>
            </li>
                        
            <li id="fifth" class="fifthanimation">
            <a href="#">
            <img src="images/anime.png" alt="Anime"/>
            </a>
            <div class="tooltip">
            <h1>Anime</h1>
            </div>
            </li>

            </ul>
            </div>
            <div class="progress-bar"></div>
        </div>
    </div>
</div>
<center>
<h3 id="night"> Valitse haluamasi kuva, jonka haluat arvostella</h3>
</center>
<div id="kuvat">
    <center>
<ul>
<li id="omg"> <a href="kuvat/space.php"><img src="images/space.jpg" alt="Avaruus"/></a></li>
<li id="omg"> <a href="kuvat/tiger.php"><img src="images/tiger.jpg" alt="Tiger"/></a></li>
<li id="omg"> <a href="kuvat/squirrel.php"><img src="images/squirrel.jpg" alt="Orava"/></a></li>
<li id="omg"> <a href="kuvat/doggo.php"><img src="images/doggo.jpg" alt="Koira"/></a></li>
<li id="omg"> <a href="kuvat/anime.php"><img src="images/anime.png" alt="Anime"/></a></li>
</ul>
    </center>
</div>

<script src="nightmode.js"></script>
    </body>
</html>