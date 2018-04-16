
<!DOCTYPE html>
<html>
    <head>
        <title>Rekisteröidy</title>
        <link rel="stylesheet" href="../res/css/style.css">
    </head>
    <body>
        <nav id="yo">
            <ul id="menu">
                <li><a href="/dohtuproj/">Kuvat</a></li>
                <li><a class="active" href="/dohtuproj/register">Rekisteröityminen</a></li>
                <li><a href="/dohtuproj/kirjaudu">Kirjautuminen</a></li>
            </ul>
        </nav>
        <h2 id="night">Rekisteröidy</h2>

		
		<!-- Lomake -->
        <form method="post" action="registered.php" accept-charset="UTF-8" style="border:1px solid #ccc">

            <div class="container">
                <label id="night"><b>Etunimi</b></label>
                <input type="text" placeholder="Kirjoita etunimi tähän" name="name" value="">

                <label id="night"><b>Sukunimi</b></label>
                <input type="text" placeholder="Kirjoita sukunimi tähän" name="surname" value="">

                <label id="night"><b>Käyttäjänimi</b></label>
                <input type="text" placeholder="Kirjoita haluamasi käyttäjänimi tähän" name="username" value="">

                <label id="night"><b>Sähköposti</b></label>
                <input type="email" placeholder="Kirjoita sähköposti tähän" name="email" value="">

                <label id="night"><b>Salasana</b></label>
                <input type="password" placeholder="Kirjoita salasana tähän" name="password" value="">

                <label id="night"><b>Salasana uudelleen</b></label>
                <input type="password" placeholder="Toista salasana" name="passwordrepeat" value="">

                <div class="clearfix">
                    <center>
                        <button type="submit" name="register" class="register">Rekisteröidy</button>
                    </center>
                </div>
            </div>
        </form>
                <script src="../nightmode.js"></script>
    </body>
</html>