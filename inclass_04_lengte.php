<?php
require('lib.inc.php');

/*

#incl.04 Hoe sta jij ervoor ?
Een programma waarmee wij (meerdere) lengten (van personen) kunnen invoeren.
Je quit met 'exit'.
De eerste ingevoerde waarde is jou lengte, de rest zijn van anderenn.
Als jou waarde minder is dan 1.40 ben je zeker 'kort'.
Bij meer dan 1.60 ben jij 'lang'.
Ook vertelt et programma als jou lengte boven het gemiddelde zit of niet.
Vb. "Jij bent lang!, en boven het gemiddelde"
    "Jij bent boven het gemiddelde"
    "jij bent kort!, en boven het gemiddelde"

*/

$lengten = array();
echo "Wat is JOUW lengte ?\n";
$input = input();     // user's lengte
$lengten[] = $input;    // user lengte storen in array

echo "\nVoer nu een paar lengtes in\n";   // random lengtes
while(1==1) {
  $temp = input();
  if(strtolower($temp) == "exit") break;
  $lengten[] = $temp;     // store random lengte in array samen met user lengte
}
$gemid = ((array_sum($lengten))/(count($lengten)));   // sum van array delen door het aantal waarden in die array
// echo $gemid;   // om te kijken of die berekening klopt

if($input > 1.60) echo "Jij bent lang!";
elseif($input < 1.40) echo "Jij bent kort!";
//else echo "Jij bent normaal";

if($input > $gemid) echo "Jij bent boven het gemiddelde";
elseif($input < $gemid) echo "Jij bent onder het gemiddelde";

?>
