<?php

include '../config.php';


    

session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // käyttäjänimi ja salasana saatu formista
	$password = $_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $myusername = mysqli_real_escape_string($connection, $_POST['username']);
    $mypassword = mysqli_real_escape_string($connection, $_POST['password']);

	
	// etsii kaikkien kirjautuien tiedot tietokannasta
    $sql = "SELECT * FROM kayttajat WHERE username = '$myusername'";
    $result = mysqli_query($connection, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);


    $count = mysqli_num_rows($result);

    $verifyhash = $row['password'];
    $username = $_POST["username"];
	$role = $row['rooli'];
	$id = $row['userID'];
  
  // katsoo onko tiedot oikein ja kirjaa heidät sisään
    if (password_verify($_POST["password"], $verifyhash)) {
        if ($count == 1) {
            $_SESSION['loggedin'] = "$username";  
			$_SESSION['role'] = "$role";
			$_SESSION['ID'] = "$id";

            header("Location: tervetuloa.php?username=$username");
        } else {
            $error = "Käyttäjanimi ja/tai salasana on virheellinen";
        }
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Kirjaudu sisään</title>
        <link rel="stylesheet" href="../res/css/style.css">
    </head>
    <body>
        <nav id="yo">
            <ul id="menu">
                <li><a href="/dohtuproj/">Kuvat</a></li>
                <li><a href="/dohtuproj/register">Rekisteröityminen</a></li>
                <li><a class="active" href="/dohtuproj/kirjaudu">Kirjautuminen</a></li>
            </ul>
        </nav>
        <h2 id="night">Kirjaudu sisään</h2>

		<!-- Lomake -->
        <form method="post" action="" accept-charset="UTF-8" style="border:1px solid #ccc">

            <div class="container">
                <label id="night"><b>Käyttäjänimi</b></label>
                <input type="text" placeholder="Kirjoita haluamasi käyttäjänimi tähän" name="username" value="">

                <label id="night"><b>Salasana</b></label>
                <input type="password" placeholder="Kirjoita salasana tähän" name="password" value="">
                <div class="clearfix">
                    <center>
                        <button type="submit" name="login" class="login">Kirjaudu sisään</button>
                    </center>
                </div>
            </div>
        </form>
                <script src="../nightmode.js"></script>
    </body>
</html>