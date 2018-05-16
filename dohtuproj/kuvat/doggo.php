<?PHP
session_start();
if (isset($_SESSION['loggedin'])) {
    // talletetaan tieto muuttujaan, jotta helpompi käyttää myöhemmin html-koodissa
    $loggedin = $_SESSION['loggedin'];
} else {
    // ei kirjautunut, ohjaa login-sivulle
    header('Location: ' . 'kirjaudu');
}

$user = $_SESSION['ID'];
$kuva = "Koira";
$date = gmdate("j\.m\.Y H:i:s ");

try {
    // yhteys tietokantaan
    $connection = new PDO("mysql:host=localhost;dbname=dohtuproj", "root", "");

    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// syöttää saadut tiedot lomakkeesta tietokantaan
    $query = $connection->prepare("INSERT INTO arvio(userID, kuva, arvio) VALUES(?,?,?)");
    $query2 = $connection->prepare("INSERT INTO kuva(nimi, userID, arvio, kommentti) VALUES (?,?,?,?)");
    $query3 = $connection->prepare("INSERT INTO kommentti(userID, kuva, date, text) VALUES (?,?,?,?)");

    echo "";
} catch (PDOException $e) {
    die("VIRHE: " . $e->getMessage());
}

// validointi tähdille - elikkä varmistaa palautusta ei tule jos tähtiä ei ole valittuna
if (isset($_POST['submitKuva'])) {
    if (isset($_POST['rating'])) {
        $rating = htmlspecialchars($_POST['rating']);
        $comment = htmlspecialchars($_POST['comment']);
        $query->execute(array($user, $kuva, $rating));
        $query2->execute(array($kuva, $user, $rating, $comment));
        $success = '<span style="color:green;font-size:32px;">Kiitos arvostelusta!</span>';
    } else {
        $error = '<span style="color:red;font-size:32px;">Tähtiarvostelu pakollinen arvostelun lähettämiseen</span>';
    }
}

if (isset($_POST['submitKuva'])) {
    if (isset($_POST['comment'])) {
        
    } else {
    $query3->execute(array($user, $kuva, $date, $comment));
    }
}


// sulkee yhteyden
$connection = null;
?>
<!DOCTYPE html>
<html>
    <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Kuvat</title>
		<link rel="stylesheet" type="text/css" media="screen" href="/dohtuproj/res/css/styledit.css"/>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400italic,400,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="/dohtuproj/starability-minified/starability-all.min.css">
    </head>
    <body>
        <nav id="yo">
            <ul id="menu">
                  <div class="dropdown">
                    <button id="dropbtn"><a class="active"  href="/dohtuproj/">Kuvat</a></button>
                    
                    
                    <div class="dropdown-content">
                    <a href="space.php">Avaruus</a>
                    <a href="tiger.php">Tiikeri</a>
                    <a href="squirrel.php">Orava</a>
                    <a href="doggo.php">Koira</a>
                    <a href="anime.php">Anime</a>
                </div>
                </div>
				<li id="right"><a href="../logout">Kirjaudu ulos</a></li>
                <li id="right"><a href="../user.php">Hei, <?php echo $_SESSION["loggedin"]; ?></a></li>
            </ul>
        </nav>
		<div id="muo">Koira</div>
		
		 <!-- Kuvakaruselli -->
			<div id="content-slider">
    	<div id="slider">
			<div id="mask">
            <img src="/dohtuproj/images/doggo.jpg" alt="Koira"/>
            </a>
            <div class="tooltip">
            <h1>Koira</h1>
            </div>
			</div>
			</div>
			</div>
	<center>
	<h1 id="night"> Arvostelu </h1>
	</center>

	<!-- Tähti arvostelu -->
	<center>
               <?php
        if (isset($_POST['submitKuva'])) {
            if (isset($_POST['rating'])) {
                echo $success;
            } else {
                echo $error;
            }
        }
        ?>
 <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <fieldset class="starability-basic"> 
	<input type="radio" id="rate1" name="rating" value="1" />
    <label for="rate1" title="1/10">1 tähti</label>

    <input type="radio" id="rate2" name="rating" value="2" />
    <label for="rate2" title="2/10">2 tähteä</label>

    <input type="radio" id="rate3" name="rating" value="3" />
    <label for="rate3" title="3/10">3 tähteä</label>

    <input type="radio" id="rate4" name="rating" value="4" />
    <label for="rate4" title="4/10">4 tähteä</label>

    <input type="radio" id="rate5" name="rating" value="5" />
    <label for="rate5" title="5/10">5 tähteä</label>

    <input type="radio" id="rate6" name="rating" value="6" />
    <label for="rate6" title="6/10">6 tähteä</label>

    <input type="radio" id="rate7" name="rating" value="7" />
    <label for="rate7" title="7/10">7 tähteä</label>

    <input type="radio" id="rate8" name="rating" value="8" />
    <label for="rate8" title="8/10">8 tähteä</label>

    <input type="radio" id="rate9" name="rating" value="9" />
    <label for="rate9" title="9/10">9 tähteä</label>

    <input type="radio" id="rate10" name="rating" value="10" />
    <label for="rate10" title="10/10">10 tähteä</label>
  </fieldset>
  </center>

		<center>
<textarea placeholder="Tähän voi kirjoittaa kommentin" name="comment" cols="50" rows="4"></textarea>
</textarea>
</center>
					<center>
                        <button type="submit" name="submitKuva" class="submitKuva">Lähetä arvostelu</button>
                    </center>
					</form>
						
<script src="../nightmode.js"></script>
		</body>
		</html>