<?php
require('lib.inc.php');

#9 BMI CALCULATOR.
#Schrijf een programma waarmee je de Body Mass Index (BMI) kan bereken.
#Bereken de BMI van de gebruiker.

print "Welcome!
Dit is de Body Mass Index calculator, meer bekend als BMI.
Vul de gegevens in en wacht op het resultaat!\n";

print "Vul de wenselijk eenheid van jouw gewicht:(kg of lbs)\n";
$weight = input();
if($weight == "kg") {
  print "Vul nu jouw massa in kg:\n";
  $massa = input();
  print "Voer in lengte:(m)\n";
  $lengte = input();
  $fcm = (int) (($massa/($lengte*$lengte)));
  print "Jouw BMI wordt $fcm";
} elseif($weight == "lbs") {
  print "Vul nu jouw massa in lbs:\n";
  $massa = input();
  print "Voer in lengte:(foot)\n";
  $lengte = input();
  $fin = (int) (($massa/($lengte*$lengte)) * 703);
  echo "Jouw BMI wordt $fin";
} else {
  print "Error, alleen kg of lbs invullen!";
}

// TEST \\
/*
$massa = input();
if($weight == "kg") {
  print "Voer in lengte:(m)\n";
  $lengte = input();
  $fcm = (int) (($massa/($lengte*$lengte)));
  print "Jouw BMI wordt $fcm";
} elseif($weight == "lbs"){
  print "Voer in lengte:(inches)\n";
  $lengte = input();
  $fin = (int) (($massa/($lengte*$lengte)) * 703);
  echo "Jouw BMI wordt $fin";
}
*/


?>
