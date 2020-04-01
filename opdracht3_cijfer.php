<?php
require('lib.inc.php');

#3. schrijf een programma die vertelt wat het minimum cijfer moet zijn van je paper om door te gaan.
#Vraag de persoon naar de cijfers voor hun in-class cijfer, maar ook naar het demo cijfer.
#De berekening van het eindcijfer is
#40% demo cijfer
#40% in-class toets cijfer
#20% paper
#Vertel de gebruiker wat het minimum cijfer moet zijn voor de paper om een 6 als eindcijfer te hebben.

// percentage wordt (getal/100)

echo "Hier berekenen wij het minimaal cijfer om op een 6 te staan voor het vak. Voer jouw cijfer in en wacht op het resultaat. Succes!\n";

echo "Voer in jouw demo cijfer:";
$c1 = input();
$demo = (40/100) * $c1;
//echo "Jouw demo cijfer wordt een $demo.\n";

echo "Vul nu jouw in-class cijfer:";
$c2 = input();
$inclass = (40/100) * $c2;
//echo "Jouw inclass cijfer wordt een $inclass.\n";

$paper = (20/100);
$tot = $demo + $inclass;
echo "Jouw demo en inclass cijfer worden samen $tot.\n";
if(6 >= $tot && $tot >= 4) {
  echo "Om minimaal een 6 te krijgen moet jouw paper cijfer een " . ((6 - $tot)/$paper) . " zijn.\n";
} elseif(6 < $tot) {
  echo "Achh, maak jij geen zorgen want jij hebt het zeker gehaald. Congrats!";
} else {
  echo "Helaas heb je het vak niet gehaald :(";
}

// TEST \\
/*
$eind = 5.5;
switch ($eind) {
  case $eind < 5 :
      echo "Helaas heb je het vak niet gehaald :(";
    break;
  case $eind >= 5 ||$eind < 6:
  echo "Om minimaal een 6 te krijgen moet jouw paper cijfer een ";

    break;
}
*/
?>
