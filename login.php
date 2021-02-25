<?php session_start();
include ("./einstell.php"); // Hier sind die Passwörter und Einstellungen gespeichert
header("Content-type:text/html; charset=utf-8");  
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="robots" content="noindex" />
<link rel="stylesheet" href="./css/<?php echo $Theme; ?>.css">
</head>
<body><center><br>
<h2><i>UGLY</i><b>vCard</b> Login</h2></div>
<div id="Index">


<div id="Eingabefeld">
<form id="LoginDIV" action="./login.php" method="POST"><table align="center">
<tr><td align="left"><p>Benutzer: </p></td><td align="right"><input type="text" name="benutzer" value=""></td></tr><br>
<tr><td align="left"><p>Passwort: </p></td><td align="right"><input type="password" name="pass" value=""></td></tr><br>
</table>
<input type="submit" name"submit" value="Login">
</div>
<div>





<?php

// Inhalt der Formulare wird desinfiziert gespeichert
$loginbenutzer = filter_input(INPUT_POST, 'benutzer', FILTER_SANITIZE_STRING);
$loginpswt = filter_input(INPUT_POST,'pass', FILTER_SANITIZE_STRING);

// Passwortabfrage
if ($loginbenutzer !== NULL && $loginbenutzer == $BenNme) {
	if ($loginpswt !== NULL && $loginpswt == $Pswt) {
		$_SESSION["SessionID"] = $SessionID;
		$_SESSION["login_zeit"] = time();
?>
	<meta http-equiv="refresh" content="0; URL=./verwalt.php"">
<?php
	} 
} 

// Wurde das Passwort bereits eingegeben (if) oder sind die Zugangsdaten falsch? (elseif))
if ($loginbenutzer !== NULL && $loginbenutzer == "" && $loginpswt !== NULL && $loginpswt == "") { // Prüft, ob die Variablen existieren und ob etwas eingetragen ist 
echo "<div id=\"Ausgabe\"><p>Bitte trage deine Zugangsdaten ein!</p></div>";
	} elseif ($loginbenutzer !== NULL && $loginbenutzer !== $BenNme or $loginpswt !== NULL && $loginpswt !==$Pswt) { //ANSONSTEN: Prüft, ob die Variablen existieren und ob etwas falsches eingetragen ist
		echo "<div id=\"Ausgabe\"><p>Falscher Nutzername / Passwort</p></div>";
}

?>
</div>
</center>
</body>
</html>
