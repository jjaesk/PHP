<?php
require('lib.inc.php');

#7 POMPSTATION BOOKIE.
#Schrijf een programma om het transactievolume bij te houden.
#Nabij Burnside (Coronie) is er een klein pompstation. Daar kan je alleen DIESEL of UNLEADED tanken. De eigenaar heeft wel een desktop voor de zaak en wil software om het verkochte aantal liters op dagbasis bij te houden. Thats where you come in...
#Jou programma is simpel en vraagt de gebruiker om een type brandstof aan te geven en vervolgens het aantal liters. Wanneer jou programma wordt afgesloten, print deze het totaal aan liters voor elk type brandstof.
#De flow van het programma moet ongeveer zijn:
#Stap1: invoer van type
#Stap2: als de invoer leeg is (of ENTER) dan een printout van het totaal per type, en sluit het programma (exit).
#Stap3: invoer volume
#Stap4: volume toevoegen aan ’t totaal
#Stap5: weer naar stap1

//echo "Brandstof ? (Unleaded of Diesel)\n";
//$brandstof = strtolower(input());
$diesel = array();
$unleaded = array();
$brandstof = 0;

while($brandstof == "unleaded" || $brandstof == "diesel") {
    echo "Brandstof ? (Unleaded of Diesel)\n";
    $brandstof = strtolower(input());
    if($brandstof == "") break;
    elseif($brandstof == "unleaded" || $brandstof == "diesel"){
      echo "Liter gevuld:\n";
      $temp = strtolower(input());
      if($temp == "exit") break;
      elseif($brandstof == "unleaded") $unleaded[] = $temp;
      elseif($brandstof == "diesel") $diesel[] = $temp;
  } else echo "Invalid brandstof\n\n";
}
$timezoneset = date_default_timezone_set("America/Fortaleza");
$totunleaded = array_sum($unleaded);
$totdiesel = array_sum($diesel);
$date = date('D d M Y H:i');

echo "\nTotale DIESEL gevuld op $date = $totdiesel l\n\n";
echo "Totale UNLEADED gevuld op $date = $totunleaded l\n";


// TEST \\
/*
echo "Voer type brandstof in\n";
$type = input();

if((strtolower($type) == "unleaded") || (strtolower($type) == "diesel")) {
  echo "Voer aantal liters in\n";
} else echo "Invalid brandstof\n";

$getal = array();
while((strtolower($type) == "unleaded") || (strtolower($type) == "diesel")) {
  $aantal = input();
  if((strtolower($aantal) == "exit")) break;
  else $getal[] = $aantal;
}
$sum = null;
foreach($getal as $v) {
  $sum += $v;
}
if($getal) echo "Het totaal bedraagd $sum liters.";
*/
?>
