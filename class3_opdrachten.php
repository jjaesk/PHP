<?php
require('lib.inc.php');

// Opdracht 3
//cijfers
// percentage wordt (getal/100)
/*
echo "Hier berekenen wij het minimaal cijfer om op een 6 te staan voor het vak. Voer jouw cijfer in en wacht op het resultaat. Succes!\n";

echo "Voer in jouw demo cijfer:";
$c1 = input();
$demo = (40/100) * $c1;
echo "Jouw demo cijfer wordt een $demo.\n";

echo "Vul nu jouw in-class cijfer:";
$c2 = input();
$inclass = (40/100) * $c2;
echo "Jouw inclass cijfer wordt een $inclass.\n";

$paper = (20/100);
$tot = $demo + $inclass;
echo "Jouw demo en inclass cijfer wordt samen $tot.\n";
if(6 >= $tot && $tot >= 4) {
  echo "Om minimaal een 6 te krijgen moet jouw paper cijfer een " . ((6 - $tot)/$paper) . " zijn.\n";
} elseif(6 < $tot) {
  echo "Achh, maak jij geen zorgen want jij hebt het zeker gehaald. Congrats!";
} else {
  echo "Helaas heb je het vak niet gehaald :(";
}
*/

// Opdracht 9
// BMI calculator
// kg/m/m

echo "Welcome!
Dit is de Body Mass Index calculator, meer bekend als BMI.\n";

echo "Vul gewicht in kg:\n";
$massa = input();

echo "Vul lengte in m:\n";
$lengte = input();
$fcm = ($massa/$lengte/$lengte);
echo "Jouw BMI wordt $fcm.";


// Opdracht 15
/*

echo "wat is uw geslacht ?\n";
$m = array();
$v = array();
//$gender = input();


while(1==1) { //$gender =="m" || $gender =="v"
 $gender = input();
  if($gender == "m") {
    $m[] = $gender;
  } elseif($gender == "v") {
    $v[] = $gender;
  } elseif(strtolower($gender == "exit")) break;
}

$aantal = count($m);
echo "Aantal mannen = $aantal";
*/

?>
