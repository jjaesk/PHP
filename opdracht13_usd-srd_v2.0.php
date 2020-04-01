<?php
require('lib.inc.php');

#13 USD-SRD CONVERTER versie 2
#Schrijf een programma waarmee je USD->SRD conversie doet, op basis van een (dag)koers.
#Stap1: Jou programma vraagt naar de CBvS dagkoers.
#Stap2: Daarna kan je steeds een USD cijferwaarde invoeren, en hij laat jou de tegenwaarde in SRD zien. Je sluit af met “quit”.
#ALS je de gebruiker “koers” intoetst, ga je weer naar stap1, en kan hij een nieuwe koers invoeren voor nieuwe berekeningen.

echo "Welcome!\nConversie versie 2 van USD naar SRD doen wij hier.\n";
$koers = null;
$waarde = null;

while($koers != "quit"){
  echo "\nWat is de USD koers momenteel ?\n";
  $koers = input();
  do {
    echo "\nKoers van USD $koers\n";
    echo "Gewenste USD die u wilt omzetten naar SRD ?\n";
    $waarde = input();
    if($waarde == "koers") break;
    elseif($waarde == "quit") die;
    else {
      $omzetting = $koers * $waarde;
      echo "Het bedrag wordt SRD $omzetting\n\n";
    }
  } while(1==1);
}

?>
