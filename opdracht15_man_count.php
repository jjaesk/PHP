<?php
require('lib.inc.php');

#15 + #INCLASS1_B MAN-COUNT
#Schrijf een programma waarmee je telt hoeveel mannen er in de groep zijn. Stap1: Jou programma vraagt naar de sexe. Dat us dus M of V.
#Stap2: Als de invoerwaarde “exit” is, print je het aantal mannen, en sluit het programma af.
#(dan weer terug naar Stap1)
#Details:
#De invoer is heel simpel: als gebruiker slechts een “M” of een “V” invoeren.
#En dat doe je zo lang als je personen hebt. Afsluiten doe je met “exit”.


echo "wat is uw geslacht ? ('exit' om te sluiten)\n";
$m = array();
$v = array();
$gender = null;
//$gender = input();  // hier niet.

while($gender != "exit") {  //$gender == "m" || $gender == "v"
  $gender = strtolower(input());      // vanaf hier gaat user m of v invoeren.
  if($gender == "m") {
    $m[] = $gender;
  } elseif($gender == "v") {
    $v[] = $gender;
  } //elseif(strtolower($gender == "exit")) break;
}

$aantal = count($m);
echo "Aantal mannen = $aantal";


?>
