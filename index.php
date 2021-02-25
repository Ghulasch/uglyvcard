<?php session_start();
include ("./einstell.php");
$datei =  file($Dateiname);

$i=0;
foreach($datei AS $ausgabe) {
   $zerlegen = explode("<", $ausgabe);
   $i++;
}

if ($zerlegen[1] == NULL && $zerlegen[1] == "") { 
		$WebTitel = "Meine UGLY VCARD"; 																				// Der Titel dieser Seite $WebTitel
		} elseif ($zerlegen[1] !== NULL && $zerlegen[1] !== "") {
		$WebTitel = $zerlegen[1];
}

if ($zerlegen[2] == NULL && $zerlegen[2] == "") {
	$FotoDatei = "<img id=\"DeinFoto\" src=\"img/foto.png\">"; 																								// Der Dateiname deines Fotos $FotoDatei
		} elseif ($zerlegen[2] !== NULL && $zerlegen[2] !== "") {
		$FotoDatei = "<img id=\"DeinFoto\" src=\"img/" . $zerlegen[2] . "\">";
}

if ($zerlegen[3] == NULL && $zerlegen[3] == "") {  														// Dein Vor- und Nachname $DeinName
      $DeinName = "<h1 id=\"NameText\">Listiger Fuchs</h1><br>";
		} elseif ($zerlegen[3] !== NULL && $zerlegen[3] !== "") {
		$DeinName = "<h1 id=\"NameText\">" . $zerlegen[3] . "</h1><br>";
}

if ($zerlegen[4] == NULL && $zerlegen[4] == "") {  														// Dein Beruf oder Motto $BerufMotto
		$BerufMotto = NULL;
		} elseif ($zerlegen[4] !== NULL && $zerlegen[4] !== "") {
		$BerufMotto = "<i><h2 id=\"MottoBeruf\">" . $zerlegen[4] . "</h2></i><br>";
}

if ($zerlegen[5] == NULL && $zerlegen[5] == "") {  		
		$KurzInfoUE = NULL;												// Überschrift für Kurzinfos über dich $KurzInfoUE
		} elseif ($zerlegen[5] !== NULL && $zerlegen[5] !== "") {
		$KurzInfoUE = "<br><p id=\"KurzinfoUE\">" . $zerlegen[5] . "</p><br>";
}

if ($zerlegen[6] == NULL && $zerlegen[6] == "") {  	
		$KurzInfo = NULL;													// Kurzinfo über dich $KurzInfo
		} elseif ($zerlegen[6] !== NULL && $zerlegen[6] !== "") {
		$KurzInfo = "<p id=\"Kurzinfo\">" . $zerlegen[6] . "</p><br><br>";
}

if ($zerlegen[7] == NULL && $zerlegen[7] == "") {
		$VCFDatei = NULL; 														// VCF Datei $VCFDatei
		} elseif ($zerlegen[7] !== NULL && $zerlegen[7] !== "") {
		$VCFDatei = "<p id=\"SozialeMedien\"><a href=\"img/" . $zerlegen[7] . "\" target=\"_blank\"><img id=\"SocialFoto\" src=\"img/vcf.png\"></a></p><br><p>Kontaktdaten im VCF Format<br>herunterladen oder abspeichern.</p><br><br>" ;
}

if ($zerlegen[8] == NULL && $zerlegen[8] == "") {  		
		$FBLogo = NULL;												// Facebook Profil URL $FBLogo
		} elseif ($zerlegen[8] !== NULL && $zerlegen[8] !== "") {
		$FBLogo = "<p id=\"SozialeMedien\"><a href=\"" . $zerlegen[8] . "\" target=\"_blank\"><img id=\"SocialFoto\" src=\"img/fb.png\"></a></p>" ;
}

if ($zerlegen[9] == NULL && $zerlegen[9] == "") {  	
		$TwitterLogo = NULL;													// Twitter Profil URL $TwitterLogo
		} elseif ($zerlegen[9] !== NULL && $zerlegen[9] !== "") {
		$TwitterLogo = "<p id=\"SozialeMedien\"><a href=\"" . $zerlegen[9] . "\" target=\"_blank\"><img id=\"SocialFoto\" src=\"img/tw.png\"></a></p>" ;
}

if ($zerlegen[10] == NULL && $zerlegen[10] == "") {
	$LinkedInLogo = NULL;  														// LinkedIn Profil URL $LinkedInLogo
		} elseif ($zerlegen[10] !== NULL && $zerlegen[10] !== "") {
		$LinkedInLogo = "<p id=\"SozialeMedien\"><a href=\"" . $zerlegen[10] . "\" target=\"_blank\"><img id=\"SocialFoto\" src=\"img/li.png\"></a></p>" ;
}

if ($zerlegen[11] == NULL && $zerlegen[11] == "") {  	
		$InstagLogo = NULL;												// Instagram Profil URL $InstagLogo
		} elseif ($zerlegen[11] !== NULL && $zerlegen[11] !== "") {
		$InstagLogo = "<p id=\"SozialeMedien\"><a href=\"" . $zerlegen[11] . "\" target=\"_blank\"><img id=\"SocialFoto\" src=\"img/ig.png\"></a></p>" ;
}

if ($zerlegen[12] == NULL && $zerlegen[12] == "") {  	
		$WAnr = NULL;												// WhatsApp Telefonnummer $WAnr
		} elseif ($zerlegen[12] !== NULL && $zerlegen[12] !== "") {
		$WAnr = "<p id=\"SozialeMedien\"><a href=\"https://wa.me/" . $zerlegen[12] . "\" target=\"_blank\"><img id=\"SocialFoto\" src=\"img/wa.png\"></a></p>" ;
}

if ($zerlegen[13] == NULL && $zerlegen[13] == "") {  	
		$TelegUsr = NULL;												// Telegram Benutzername URL $TelegrUsr
		} elseif ($zerlegen[13] !== NULL && $zerlegen[13] !== "") {
		$TelegUsr = "<p id=\"SozialeMedien\"><a href=\"https://t.me/" . $zerlegen[13] . "\" target=\"_blank\"><img id=\"SocialFoto\" src=\"img/tg.png\"></a></p>" ;
}

if ($zerlegen[14] == NULL && $zerlegen[14] == "") {  	
		$MailLink = NULL;												// E-Mail Link $MaiLink
		} elseif ($zerlegen[14] !== NULL && $zerlegen[14] !== "") {
		$MailLink = "<p id=\"SozialeMedien\"><a href=\"mailto:" . $zerlegen[14] . "\"><img id=\"SocialFoto\" src=\"img/mail.png\"></a></p>" ;
}

?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo $WebTitel; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="robots" content="noindex" />
<link rel="stylesheet" href="./css/<?php echo $Theme; ?>.css">
</head>
<body>
<center>
<div id="Kasten">
<br>
<br>
<?php echo $FotoDatei;?><br><br>
<div id="Index">
<?php echo $DeinName;?>
<?php echo $BerufMotto;?>
</div>


<?php
if ($KurzInfoUE !== NULL or $KurzInfo !== NULL) {  		
echo '<div id="DesignBox">';
echo '<div id="Index">';
echo $KurzInfoUE;
echo '<br>';
echo $KurzInfo;
echo '</div>';
echo '</div>';
echo'<br>';
}
?>



<?php
if ($VCFDatei !== NULL) {  		
echo '<div id="DesignBox">';
echo '<div id="Index">';
echo '<br>';
echo $VCFDatei;
echo '</div>';
echo '</div>';
echo '<br>';
}
?>


<div id="Medienblock">
<div id="Index">

<?php echo $FBLogo;?><?php echo $TwitterLogo;?><?php echo $LinkedInLogo;?><?php echo $InstagLogo;?><?php echo $WAnr;?><?php echo $TelegUsr;?><?php echo $MailLink;?>


</div>
</div>
<div>
<?php if(isset($_SESSION['SessionID'])){ echo "<br><br><button id=\"VerwaltButton\" type=\"submit\" onclick=\"window.location.href='./verwalt.php'\">Verwaltungsbereich</button>";} ?>
<?php if(isset($_SESSION['SessionID'])){ echo "<br><button id=\"Logout\" type=\"submit\" onclick=\"window.location.href='./logout.php'\">Abmelden</button><br><br>";} ?>
</div>

<?php if ($FBLogo !== NULL or $TwitterLogo !== NULL or $LinkedInLogo !== NULL or $InstagLogo !== NULL or $WAnr !== NULL or $TelegUsr !== NULL or $MailLink !== NULL) {
echo '<br>';} ?>

</div>
<br>
<p><i>UGLY</i><b>vCard</b> by Daniel Teich</p>
<br>
<br>
</center>
</body>
</html>
