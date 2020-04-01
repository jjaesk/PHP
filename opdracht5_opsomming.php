<?php
require('lib.inc.php');

#5 schrijf een programma waarmee je getallen bij elkaar optelt zolang de gebruiker getallen blijft invoeren.
#Leg de gebruiker uit dat je uit dit programma komt door gewoon ENTER te drukken.
#Stap1: Vraag de gebruiker om een getal in te voeren.
#Stap2: Indien er al een getal eerder is ingevoerd tel je dit (nieuwe getal) op bij het totaal van de vorige waarden.
#Stap3: Indien de waarde ENTER is, geef je het totaal weer (je print “de som is …”) en sluit het programma meteen af.
#Stap4: Herhaal stap een.

$num = array();
$sum = 0;
$temp = 0;

// laten wij vragen naar waarden. Dit blijven we doen totdat men
// met QUIT eruit gaat.

echo "Enter numbers. Enter to finish\n";
while(strtolower($temp) != "") {
  $temp = input();  //temporary variable
  //if(strtolower($temp) == "quit") break;
  $num[] = (float) $temp; //else aan t begin
}
//var_dump($age);
$aantal = count($num);

foreach($num as $v){
  $sum += $v;
}
echo "de som is: $sum \n";
//echo "het gemiddelde is:" . ($sum / $aantal);


?>
