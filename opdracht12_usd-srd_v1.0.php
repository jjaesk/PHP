<?php
require('lib.inc.php');

#12 USD-SRD CONVERTER
#Schrijf een programma waarmee je USD->SRD conversie doet, op basis van een (dag)koers.
#Jou programma vraagt naar de CBvS dagkoers.
#Daarna kan je steeds een USD cijferwaarde invoeren, en hij laat jou de tegenwaarde in SRD zien. Je sluit af met “quit”.


echo "Welcome!\nConversie van USD naar SRD doen wij hier.\nWat is de USD koers momenteel ?\n";
$koers = input();
$waarde = null;

while($koers){
  echo "\nKoers van USD $koers.\n";
  echo "Gewenste USD die u wilt omzetten naar SRD ?\n";
  $waarde = input();
  if($waarde == "quit") break;
  $omzetting = $koers * $waarde;
  echo "Het bedrag wordt SRD $omzetting\n\n";
}


?>
