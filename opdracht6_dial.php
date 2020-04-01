<?php
require('lib.inc.php');

#6 schrijf een programma waarmee je de 1-800-nummers kan uitlezen.
#Van de TV kennen wij allemaal de zovele reclames die je bijna smeken om “1-800-BELMINOW” te bellen voor “your free information kit” en weet ik niet allemaal.
#Jou programma gaat de letters naar cijfers converteren. Daarvoor vraag je de gebruiker naar de input (die schrijft bijvoorbeeld “1-800-HELP”), je code doet de omzetting waarna het resultaat netjes aan de gebruiker wordt gepresenteerd.

echo "Dial ";
$input = strtolower(input());
echo "and that's\n\n";

$alphabet = array(
  "!" => 1, "?" => 1, "," => 1, "." => 1, "-" => 1, "_" => 1, "=" => 1,
  "a" => 2, "b" => 2, "c" => 2,
  "d" => 3, "e" => 3, "f" => 3,
  "g" => 4, "h" => 4, "i" => 4,
  "j" => 5, "k" => 5, "l" => 5,
  "m" => 6, "n" => 6, "o" => 6,
  "p" => 7, "q" => 7, "r" => 7, "s" => 7,
  "t" => 8, "u" => 8, "v" => 8,
  "w" => 9, "x" => 9, "y" => 9, "z" => 9
);
$output = null;

for($i=0; $i<strlen($input); $i++) {
  $output .= $alphabet[$input[$i]];
}
echo "1-800-$output\n1-800-$output\n1-800-$output\n1-800-$output\n1-800-$output\n";

// TEST \\

/*
$input = input();
$alphabet = array(
  "a" => 2, "b" => 2, "c" => 2,
  "d" => 3
);
$output = $alphabet[$input];
echo $output;
*/


?>
