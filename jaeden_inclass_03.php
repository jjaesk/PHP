<?php
require('lib.inc.php');

/**
----- incl. 03 -----
Een programma die waarden x, y en z accepteert. Vervolgens gaat je programma x keren y - z uitvoeren en printen naar het scherm. Iedere 'ronde' (iedere keer van die x runs) gaat je z waarde met 0.2 omlaag. Jou programma moet stoppen wanneer het x keren heeft gewerkt, of wanneer z kleiner is geworden dan 0.
Print op et scherm hoeveel 'ronden' hij eeft gemaakt (hoeveel keer door de loop)
----- END -----
**/


echo "Voer een waarde voor x:\n";
$x = input();   // 2
echo "\nVoer een waarde voor y:\n";
$y = input();   // 3
echo "\nVoer een waarde voor z:\n";
$z = input();   // 2
$i = 0;

echo "Het runt $x keren, dus";

while($i < $x) {
  if($z < 0) break; /* {
    $count = count($i);
    echo "Het heeft $count keren gerunt";
    break;      // die;
  }*/
  $i++;
  $tot = $y - $z;
  echo "\n\nUitkomst van deze scenario is = $tot \n";   // $y - $z
  $z -= 0.2;
}


?>
