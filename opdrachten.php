<?php
// Main file used during php classes 2015-2016.
// Note that this is only for CLASS/DEMONSTRATION PURPOSES.
// Owner:        Fabian Lewis <fabian.lewis@yahoo.co.uk>
// Date:         2019-05-27
// Version:      1.01
// License type: Attribution-NonCommercial-ShareAlike
//               CC BY-NC-SA

// custom library supplied by lecturer for iMiT class PHP
require('lib.inc.php');


// Opdracht 1
/*
$varA = 7;
$varB = 9.50;

$varA = $varB - $varA;

echo "Beste gebruiker, de ideale prijs is SRD $varA.
Vergeet u aub niet om de belasting erbovenop te plaatsen.
Een fijne dag. Tot ziens.";
*/
// Opdracht 2
/*
echo "Luister U graag naar rockmusic ?";
$antw = input();

if($antw == "ja") {
  echo "Heeft U dan gehoord over die nieuwe CD van Alanis Morissette ?
  Het is best wel leuk, dus ik adviseer je het te kopen ;).";
} else {
  echo "Hmm, jammer. Dan kies je liever voor die nieuwe CD van Nisha Madaran.";
}
*/
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
// Opdracht 3
//cijfers
// percentage wordt (getal/100)
/*
echo "Hier berekenen wij jouw eindcijfer voor het vak. Voer jouw cijfer in en wacht op het resultaat. Succes!\n";

echo "Voer in jouw demo cijfer:";
$c1 = input();
$demo = (40/100) * $c1;
echo "Jouw demo cijfer wordt een $demo.\n";

echo "Vul nu jouw in-class cijfer:";
$c2 = input();
$inclass = (40/100) * $c2;
echo "Jouw inclass cijfer wordt een $inclass.\n";

echo "Als laatste voer je in jouw paper cijfer:";
$c3 = input();
$paper = (20/100) * $c3;
echo "Jouw paper cijfer wordt een $paper.\n";

$eind = ($demo + $inclass + $paper);
echo "Jouw eind cijfer wordt een $eind.\n";

if($eind < 5) {
  echo "Heel slecht maar kan veel beter!";
} elseif($eind >= 5 AND $eind < 6) {
  echo "Hoofdje op, net op het nippertje!";
} elseif($eind >= 6 AND $eind < 7) {
  echo "Een redelijk cijfer!";
} elseif($eind >= 7 AND $eind < 8) {
  echo "Gaat nu veel beter!";
} elseif($eind >= 8 AND $eind < 9) {
  echo "Heel mooi, nog een beetje meer oefenen!";
} else // ($eind >= 9 AND $eind <= 10)
 {
  echo "Perfect!";
}
*/
// Opdracht 4

// van cm naar inches omzetten
// 2.5cm = 1"
// 1cm = 1/2.5
// 1" = 2.5cm
// 2" = 5cm
// a" = 1cm
// a = 1/2.5
/*
echo "Hier zetten we centimeters om naar inches
Vul cm in:";
$cm = input();
$inch = $cm/2.5;

echo "Het omzetten van $cm centimeters naar inches wordt $inch inches";
*/
//  Opdracht 5
//



// Opdracht 6
// Hier converteren we letters naar cijfers

// Opdracht 7
/*
echo "Type brandstof ? \n";
$brandstof = input();
$diesel = 6.50;
$unleaded = 6.90;

if($brandstof == "diesel") {
  echo "Diesel = SRD $diesel
Vul l in:";
} elseif ($brandstof == "unleaded") {
  echo "Unleaded = SRD $unleaded
Vul l in:";
} else {
  echo "Input is leeg/incorrect!
Diesel = SRD $diesel
Unleaded = SRD $unleaded";
return 0;
}
$l = input();




while ($brandstof == "diesel" || $brandstof == "unleaded") {
  echo "Totale liter brandstof: $l l.\n";
  if ($brandstof == "diesel") {
    echo "Prijs Diesel: SRD " . ($l * $diesel) . ".\n";
  } else {
    echo "Prijs Unleaded: SRD " . $l * $unleaded . ".\n";
  }
  $l = $l + input();

}
*/
/*
($brandstof == "diesel") {
  echo "Totale diesel voor vandaag: $l l";
//  Totale kosten wordt SRD $totd;
} elseif($brandstof == "unleaded") {
  echo "Totale unleaded voor vandaag: $l l";
// Totale kosten wordt SRD $totu;
*/
// Opdracht 9
// BMI calculator
// kg/m/m
/*
echo "Welcome!
Dit is de Body Mass Index calculator, meer bekend als BMI.
Vul de gegevens in en wacht op het resultaat!\n";

echo "Vul gewicht in kg:\n";
$massa = input();

echo "Vul lengte in m:\n";
$lengte = input();
$fcm = (($massa/$lengte/$lengte));
echo "Jouw BMI wordt $fcm.";
*/
/*
print "Vul de wenselijk eenheid van jouw gewicht:(kg of lbs)\n";
$weight = input();
if($weight == "kg") {
  print "Vul nu jouw massa in kg:\n";
} elseif($weight == "lbs") {
  print "Vul nu jouw massa in lbs:\n";
} else {
  print "Error, alleen kg of lbs invullen!";
  return 0;
}
*/
/*if ($weight == "kg") {
  print "Jouw gewicht is $massa kg.
Vul nu de wenselijk eenheid van jouw lengte:(cm of inches)\n";
} else {
  print "Jouw gewicht is $massa pond.
Vul nu de wenselijk eenheid van jouw lengte:(cm of inches)\n";
}
*/
/*
$leenheid = input();
if ($leenheid == "cm") {
  print "Vul nu jouw lengte in cm:\n";
} else {
  print "Vul nu jouw lengte in inches:\n";
}
*/
//$fin = (($massa/$lengte/$lengte) * 703);
/*if ($leenheid == "cm") {
  print "Jouw lengte is $lengte cm.
Jouw BMI wordt $fcm.";
} else {
  print "Jouw lengte is $lengte inches.
Jouw BMI wordt $fin.";
}
*/
// Opdracht 10

//$timezone_idetifier = DateTimeZone::listIdentifiers();
//foreach ($timezone_idetifier as $key => $list) {
//  echo $list . "\n";
//}

date_default_timezone_set("America/Fortaleza");
$timezoneget = date_default_timezone_get();
$name = array();
$temp = null;

echo "Voer uw naam in:\n";

while($temp != "exit") {
  $date = date("r");
  $temp = strtolower(input());
  $presentie = "$temp heeft ingelogd op $date";
  if($temp == "" || $temp == "exit"){ //fgets(STDIN)
    break;
  }
  $name[] = $presentie;

  //if(strtolower($temp == "exit")) break;
}

foreach($name as $list){
  echo $list;
}
//var_dump($name);
//echo $name;


// Opdracht 13



// Opdracht 15
/*
echo "wat is uw geslacht ?\n";
$m = array();
$v = array();
$gender = null;
//$gender = input();
*/

//while(strtolower($gender != "exit")/*$gender =="m" || $gender =="v"*/) {
/*  $gender = input();
  if($gender == "m") {
    $m[] = $gender;
  } elseif($gender == "v") {
    $v[] = $gender;
  }
}

$aantal = count($m);
echo "Aantal mannen = $aantal";
*/
// Opdracht 17
/*
echo "Input a text:\n";
$str = input();
$n = 2;
$newstr = "";

for ($i=0; $i<strlen($str); $i++) {
  for ($j=0; $j<$n; $j++) {
    if ($j>0) $newstr .= strtolower($str[$i]);
    else $newstr .= $str[$i];
    if(($str[$i] == " ") || ($str[$i] == "\n")) $j = $n;
  }
}
echo $newstr;
*/
?>
