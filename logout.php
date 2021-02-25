<?php 
// Wird ausgeführt um mit der Ausgabe des Headers zu warten. 
ob_start (); 

session_start (); 
session_unset (); 
session_destroy (); 

header ("Location: ./login.php"); 
ob_end_flush (); 
?>