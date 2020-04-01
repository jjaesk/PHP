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

/*
//lets do something here
$variable1 = 'dit is de waarde ervan. een regel tekst (een string).';										// datatype string
$variable2 = 901;														// datatype integer
$variable3 = 77.45;														// datatype float (floating point number)

$got_money = true;														// datatype boolean



//check de sterkte van de portemonee
if($got_money == true) echo("a boi tja pakkie!!!\n");
else echo("precaire economische situate he?... ZUCHT :(\n");


//een beetje rekenen kan ook toch?
//hierbij gaan we trouwens de output mixen, er komt tekst en
$temp = $variable2;
$temp = $temp * 222;
echo($variable2 . " was de initiele waarde, en nu de uiktomst van de berekening: " . $temp . "\n");


//'t laatste voorbeeld.
//hier gebruiken we keyboard input
echo("zo zo. en wat is uw naam? ");
$temp = input();
echo("Weet je zeker dat jij zo heet, beste '" . $temp . "'?\n");
*/

//$d1 = input();

//echo ("voer 'ja' in : " . $d1 . "\n"
//if($d1 == 'ja')  echo ("jij hebt het begrepen!\n");

echo ("Voer cijfer in:");
$d1 = input();

echo ("Voer tweede cijfer in:");
$d2 = input();

echo ("Resultaat:" . $d1 * $d2);


?>