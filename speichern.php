<?php
include ("./einstell.php");
$datei = "./" . $Dateiname; // Datei 
$fp = fopen($datei,"w"); //Datei öffnen
$_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
foreach($_POST['zerlegen'] as $zeilenteile) {
	$zeilenteil = str_replace(array("\r\n", "\n", "\r"), ' ', $zeilenteile);
   $zeile=implode('<',$zeilenteil)."\n";
   fputs($fp,$zeile);
}

fputs($fp,$data); # daten in datei speichern
fclose($fp);

header("Location: ./verwalt.php");
?>