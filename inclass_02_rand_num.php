<?php
require('lib.inc.php');

/*

#incl.02 No-duplicates-random
Een programma die random gehele getallen tussen 1 en 5 moet genereren en duplicaten mogen er niet komen.
Vb. output run1: 1, 4, 2, 5, 3
Vb. output run2: 2, 3, 5, 1, 4
De gehele mogen niet eerder zijn voorgekomen binnen een run.

*/
/*
$getallen = array(1,2,3,4,5);   // array('a','b','c','d','e');
// $i = 0;
shuffle($getallen);


$generate = array();
do {
  $generate[] = $getallen[array_rand($getallen)];
} while(count($generate) != 5) ;
*/

//print_r($getallen[array_rand($getallen)]);
//print_r(implode($getallen, ", "));
//print_r(implode($generate, ", "));

//rand();

$geheugen = array();
$gevonden = false;

while(count($geheugen) != 5) {
  $gekozen = rand(1, 5);
  $gevonden = array_search($gekozen, $geheugen);
  if($gevonden === false) {
    //echo $gekozen;
  $geheugen[] = $gekozen;
  }
}
print_r($geheugen);
//implode($geheugen, ", ");

?>
