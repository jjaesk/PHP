<?php
require('lib.inc.php');

#17. STUTTER-COPY: Een programma die de inhoud van een file overcopieert en daarbij de letters/tekens “per ongeluk” dupliceert. Jou programma leest file_in.txt en schrijft file_out.txt. De (normale) tekens worden per abuis gedupliceerd in het proces.
#Let op dat 1. Niet ALLES wordt gedupliceerd, en dat 2. De taalregel die zegt dat (alleen) de eerste letter in een nieuwe zin een hoofdletter moet zijn wordt gerespecteerd. ;-)

echo "Voer text in:\n";
$str = input();
//$str = file_get_contents("lib.inc.php");
$n = 2;
$newstr = null;

for ($i=0; $i<strlen($str) ; $i++) {
  for ($j=0; $j<$n ; $j++) {
    if($j > 0) $newstr .= strtolower($str[$i]);
    else $newstr .= $str[$i];
    if(($str[$i] == " ") || ($str[$i] == "\n")) $j = $n;
  }
}
echo $newstr;

// TEST \\
/*
$str = input();
echo $str[1];
*/

?>
