<?php
require('lib.inc.php');

//#1. schrijf een programma waarmee prijsadvies wordt gegeven.
//Werk hierbij conform de volgende specifieken: Plaats in variabele A het getal 7. Vervolgens wordt in variabele B, het getal 9.50 geplaatst.
//Nu trek je A van B af en plaatst het resultaat in A.
//Laat het programma op het scherm printen:
//"Beste gebruiker, de ideale prijs is x SRD.
//Vergeet u aub niet om de belasting erbovenop te plaatsen.
//Een fijne dag. Tot ziens."
//Waar x staat, moet je de waarde van de berekening laten verschijnen.


$varA = 7;
$varB = 9.50;

$varA = $varB - $varA;

echo "Beste gebruiker, de ideale prijs is $varA SRD.
Vergeet u aub niet om de belasting erbovenop te plaatsen.
Een fijne dag. Tot ziens.";

?>
