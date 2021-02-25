<?php session_start(); /* Starts the session */
include ("./einstell.php"); 
if(!isset($_SESSION['SessionID'])) {
header ("Location: ./index.php");
}
if(isset($_SESSION['SessionID'])){
	if(time()-$_SESSION["login_zeit"] >= $Ablaufzeit)  { 
        session_unset(); 
        session_destroy(); 
        header("Location: ./login.php"); 
    }
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="robots" content="noindex" />
<link rel="stylesheet" href="./css/<?php echo $Theme; ?>.css">
</head>
</body><center>
<div id="Verwalten">
<form id="Verwaltung" action="./speichern.php" method="post">
<?php
$datei = file("./" . $Dateiname);
$i=0;
foreach($datei AS $ausgeben) {
   $zerlegen = explode("<", $ausgeben); ?>
<?php
echo '<h1><i>UGLY</i><b>vCard</b></h1><br>';
echo '<p>Verwaltungsbereich</p><br>';
echo '<br>';
echo '<img src="./img/uvcard.png"><br><br>';
// Kurze Sicherheitsüberprüfung, ob das Standard-Passwort noch gesetzt ist.
if ($BenNme == "admin" && $Pswt == "pass") {
echo "<p id=\"Sicherheit\"><b>Ändere Sofort die Zugangsdaten.</b><br>Diese kannst du in der <i>einstell.php</i> ändern.</p><br><br>";
}
echo '<p>Kurzanleitung:</p><br>';
echo '<p id="Erklaerung">Auf dieser Seite legst du sämtliche Inhalte für deine kleine <i>UGLY</i><b>vCard</b> fest. Wenn du nicht möchtest, dass man eine Information auf der Startseite findet, lösche einfach den gesamten Inhalt aus dem entsprechenden Textfeld. Anschließend musst du nur noch auf <i>Speichern</i> drücken.</p><br><br>';
echo '<br><br>';
echo '<input type="hidden" name="zerlegen['.$i.'][0]" maxlength="40" size="40" value="'.$Schutz.'"><br>';
echo '<p>Seitentitel:</p><br>';
echo '<input type="text" name="zerlegen['.$i.'][1]" maxlength="40" size="40" value="'.$zerlegen[1].'"><br>';
echo '<p id="Erklaerung">Damit legst du einen Namen für deine Seite fest.</p><br><br>';
echo '<p>Dein Foto:</p><br>';
echo '<input type="text" name="zerlegen['.$i.'][2]" maxlength="40" size="40" value="'.$zerlegen[2].'"><br>';
echo '<p id="Erklaerung">Trage den genauen Dateinamen deines Fotos ein.<br>Beispielsweise <i>foto.jpg</i>. Dieses muss sich<br>im Ordner /img befinden um nutzbar zu sein.</p><br><br>';
echo '<p>Vor- & Nachname:</p><br>';
echo '<input type="text" name="zerlegen['.$i.'][3]" maxlength="40" size="40" value="'.$zerlegen[3].'"><br>';
echo '<p id="Erklaerung">Trage deinen Vor- & Nachnamen ein</p><br><br>';
echo '<p>Dein Beruf oder deine Tätigkeit:</p><br>';
echo '<textarea name="zerlegen['.$i.'][4]" id="TextBox" onkeypress="if(event.keyCode==13){return false;}" maxlength="160" rows="2">'.$zerlegen[4].'</textarea><br>';
echo '<p id="Erklaerung">Du kannst auch ein Kurzes Zitat verwenden</p><br><br>';
echo '<p>Überschrift für Kurzinformationen:</p><br>';
echo '<input type="text" name="zerlegen['.$i.'][5]" maxlength="40" size="40" value="'.$zerlegen[5].'"><br>';
echo '<p id="Erklaerung">Trage eine Überschrift für die Kurzinformationen ein.</p><br><br>';
echo '<p>Kurzinformation über dich:</p><br>';
echo '<textarea name="zerlegen['.$i.'][6]" id="TextBox" onkeypress="if(event.keyCode==13){return false;}" maxlength="250" rows="4">'.$zerlegen[6].'</textarea><br>';
echo '<p id="Erklaerung">Einige Worte über dich in max. 200 Zeichen</p><br><br>';
echo '<p>VCF Datei für den Kontaktdownload:</p><br>';
echo '<input type="text" name="zerlegen['.$i.'][7]" maxlength="40" size="40" value="'.$zerlegen[7].'"><br>';
echo '<p id="Erklaerung">Trage den genauen Dateinamen deiner VCF-Datei ein,<br>damit diese heruntergeladen werden kann.<br>Die VCR-Datei muss sich im Ordner /img befinden.</p><br><br>';
echo '<p>Facebook-Profil:</p><br>';
echo '<input type="text" name="zerlegen['.$i.'][8]" maxlength="40" size="40" value="'.$zerlegen[8].'"><br>';
echo '<p id="Erklaerung">Trage die vollständige URL zu deinem Facebook-Profil ein.</p><br><br>';
echo '<p>Twitter-Profil:</p><br>';
echo '<input type="text" name="zerlegen['.$i.'][9]" maxlength="40" size="40" value="'.$zerlegen[9].'"><br>';
echo '<p id="Erklaerung">Trage die vollständige URL zu deinem Twitter-Profil ein.</p><br><br>';
echo '<p>LinkedIn-Profil</p><br>';
echo '<input type="text" name="zerlegen['.$i.'][10]" maxlength="40" size="40" value="'.$zerlegen[10].'"><br>';
echo '<p id="Erklaerung">Trage die vollständige URL zu deinem LinkedIn-Profil ein.</p><br><br>';
echo '<p>Instagram-Profil</p><br>';
echo '<input type="text" name="zerlegen['.$i.'][11]" maxlength="40" size="40" value="'.$zerlegen[11].'"><br>';
echo '<p id="Erklaerung">Trage die vollständige URL zu deinem Instagram-Profil ein.</p><br><br>';
echo '<p>WhatsApp Nummer</p><br>';
echo '<input type="text" name="zerlegen['.$i.'][12]" maxlength="40" size="40" value="'.$zerlegen[12].'"><br>';
echo '<p id="Erklaerung">Trage deine Telefonnummer für WhatsApp ein. Die Telefonnummer muss im internationalen Format (+49..) eingegeben werden (ohne Leerzeichen).</p><br><br>';
echo '<p>Telegram Name</p><br>';
echo '<input type="text" name="zerlegen['.$i.'][13]" maxlength="40" size="40" value="'.$zerlegen[13].'"><br>';
echo '<p id="Erklaerung">Trage deinen Benutzernamen für Telegram ein.</p><br><br>';
echo '<p>Deine E-Mail Adresse:</p><br>';
echo '<input type="text" name="zerlegen['.$i.'][14]" maxlength="40" size="40" value="'.$zerlegen[14].'"><br>';
echo '<p id="Erklaerung">Trage deine E-Mail Adresse als Kontaktmöglichkeit ein.</p><br><br><br>';
echo '<input type="hidden" name="zerlegen['.$i.'][15]" maxlength="40" size="40" value="<">';
   $i++;
}
echo '<input type="submit" value="Speichern" /><br>';
?>

</form>
<?php if(isset($_SESSION['SessionID'])){ echo "<button id=\"VerwaltButton\" type=\"submit\" onclick=\"window.location.href='./index.php'\">Zur Seite</button><br>";} ?>
<?php if(isset($_SESSION['SessionID'])){ echo "<button id=\"Logout\" type=\"submit\" onclick=\"window.location.href='./logout.php'\">Abmelden</button>";} ?>
<br>
<br>
</center>
</div>
</body>
<?php
}
?>
</html>