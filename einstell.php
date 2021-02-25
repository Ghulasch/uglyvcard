<?php 


// Dein Benutzername
$BenNme = "admin";

// Dein Passwort
$Pswt = "pass";

// Sekunden, bis du automatisch abgemeldet wirst
$Ablaufzeit = "900";

// Denke dir 4-stellige Zahl um den Loginvorgang sicherer zu machen (für die Session ID).
$ZufaelligeZahl = "666";

// Auswahl zwischen "dunkel" und "hell"
$Theme = "hell";

//Hier werden deine eingetragenen Daten gespeichert. Wenn du den Dateinamen hier änderst, musst du die Datei umbenennen!
$Dateiname = "w3FyCgBtRs7I1Mn.php"; 

// Wird angezeigt, wenn jemand die $Dateiname Datei direkt aufruft.
$Schutz = "Gehen Sie bitte weiter. Hier gibt es nichts zu sehen!";



















/* ---------- Finger weg! - Hier wird die zufällige ID erstellt ------------*/
$heute = date('YmdHi');
$Start = date('YmdHi', strtotime('1986-02-14 08:30:00'));
$Bereich = $heute - $Start;
$Wert = rand(0, $Bereich);
$VorID = ($Start + $Wert * $ZufaelligeZahl - $Ablaufzeit);
$UnID = uniqid();
$IstID = $VorID . $UnID;
$SHAID = sha1($IstID);
$SessionID = password_hash($SHAID, PASSWORD_DEFAULT);
?>