<?PHP
// form handler
function register($arr) {
  extract($arr);

  if(!isset($name, $surname, $username, $email, $password, $passwordrepeat)) return;
  if(!$name) {
    $nameError = "<p style=\"color: red;\">Unohdit kirjoittaa etunimesi</p>";
  }
   if(!$surname) {
    $surnameError = "<p style=\"color: red;\">Unohdit kirjoittaa sukunimesi</p>";
  }
   if(!$username) {
    $usernameError = "<p style=\"color: red;\">Unohdit kirjoittaa käyttäjänimen</p>";
  }
  if(!preg_match("/^\S+@\S+$/", $email)) {
    $emailError = "<p style=\"color: red;\">Kirjoita pätevä sähköposti</p>";
  }
if (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{7,47}$/', $password)) {
    $passwordError = "<p style=\"color: red;\">Salasanan pitää vähintään sisältää 7 merkkiä (kirjainta ja numeroa) erikoismerkitkin käy</p>";
} 
if ($_POST["password"] === $_POST["passwordrepeat"]) {
	
}
else {
   $passwordrepeatError = "<p style=\"color: red;\">Toistamasi salasanasi ei vastaa alkuperäistä</p>";
}

  
  if(isset($nameError) || isset($surnameError) || isset($usernameError) || isset($emailError) || isset($passwordError) || isset($passwordrepeatError)) {
    if(isset($nameError)) {
      echo $nameError;
    }
	 if(isset($surnameError)) {
      echo $surnameError;
    }
	 if(isset($usernameError)) {
      echo $usernameError;
    }
    if(isset($emailError)) {
      echo $emailError;
    }
    if(isset($passwordError)) {
      echo $passwordError;
    }
	 if(isset($passwordrepeatError)) {
      echo $passwordrepeatError;
    }
    return;
  }

  // send email and redirect
  $to = "feedback@example.com";
  $headers = "From: webmaster@example.com" . "\r\n";
  mail($to, $subject, $message, $headers);
  header("Location: ");
  exit;
}

// execution starts here
if(isset($_POST['register'])) {
  // call form handler
  $errorMsg = register($_POST);
}



?>

