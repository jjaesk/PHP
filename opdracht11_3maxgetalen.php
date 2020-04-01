<?php
require('lib.inc.php');

#11 DE TOP 3
#Schrijf een programma waarmee je de top drie getallen vaststelt.
#Vraag de gebruiker naar vijf getallen.
#Stel de drie hoogste getallen vast, en laat deze op het scherm zien.

// Opdracht 11

echo "Voer vijf getallen in:\n";
$getallen = array();
while(count($getallen) != 5){
  $insert = input();
  $getallen[] = (int) $insert;
}
echo "Vijf getallen zijn opgeslagen!\n";
rsort($getallen);

//var_dump($getallen);
#rsort($max);

$top = 3;
$i = 0;
$max = array();

while($i<$top) {     // && ($i<count($getallen))) {
  $max[] = $getallen[$i];
  $i++;
}
echo ("De top drie getallen zijn:\n" . implode($max, "\n"));

// PLAN B \\

/*
$max1 = $getallen[0];
$max2 = $getallen[1];
$max3 = $getallen[2];
echo "De hoogste drie waarden zijn:\n$max1\n$max2\n$max3";
*/

// TEST \\
/*
$max = array();
$max1 = max($getallen);
$max[] = $max1;
$max2 = max($getallen);
if($max2 != $max1) $max[] = $max2;
$max3 = max($getallen);
if(($max3 != $max2) && ($max3 != $max1) && ($max1 != $max2)) $max[] = $max3;
*/
/*
do {
  $max2 = max($getallen);
  if($max2 != $max1) $max[] = $max2;
} while($max1 == $max2);
do {
  $max3 = max($getallen);
  if(($max3 != $max2) && ($max3 != $max1) && ($max1 != $max2)) $max[] = $max3;
} while(($max3 == $max2) && ($max3 == $max1) && ($max1 == $max2));
*/
#print_r($max);

// TEST \\
/*
$max = array(6,3,7,9,10);
rsort($max);
$max1 = $max[0];
$max2 = $max[1];
$max3 = $max[2];
echo "De hoogste drie waarden zijn:\n$max1\n$max2\n$max3";
*/
?>
