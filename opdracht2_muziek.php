<?php
require('lib.inc.php');

#2. schrijf een programma waarmee je koopadvies geeft.
#Vraag de gebruiker of die graag luistert naar rock muziek. Indien ja, geef je als advies de nieuwe CD van Alanis Morissette te kopen.
#In het andere geval adviseer je om toch liever te gaan voor het nieuwste van Nisha Madaran.

echo "Luister U graag naar rockmusic ?\n";
$antw = input();

if($antw == "ja") {
  echo "Heeft U dan gehoord over die nieuwe CD van Alanis Morissette ?\nHet is best wel leuk, dus ik adviseer je het te kopen ;).";
} elseif($antw == "nee") {
  echo "Hmm, jammer. Dan kies je liever voor die nieuwe CD van Nisha Madaran.";
} else {
  echo "Hmm, jij en ik hebben helemaal niet dezelfde smaak";
}

?>
