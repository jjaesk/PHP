<?php
require('lib.inc.php');

#4 schrijf een programma waarmee je centimeters in inches omzet.
#Er zijn nog zovelen die problemen hebben met uit het hoofd #omzetten van centimeters naar inches. Met jou specialistische kennis schrijf je een programma die de input (in centimeters) inleest om uiteindelijk de output te presenteren in inches.

// van cm naar inches omzetten
// 2.5cm = 1"
// 1cm = 1/2.5
// 1" = 2.5cm
// 2" = 5cm
// a" = 1cm
// a = 1/2.5

echo "Hier zetten we centimeters om naar inches
Vul cm in:\n";
$cm = input();
$inch = $cm/2.5;

echo "Dat wordt $inch inches";

?>
