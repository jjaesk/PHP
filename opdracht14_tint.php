<?php
require('lib.inc.php');

#14 + #INCLASS1_A HELP DE POLITIE
# Schrijf een programma waarmee de politie makkelijk de boete op getinte ruiten kan vaststellen.
# Stap1: Jou programma vraagt naar het tint-percentage.
# Stap2: Als de invoerwaarde “exit” is, sluiten je het programma af.
# Stap3: Daarna geeft jou programma aan hoveel SRD de boete is.
# (dan weer terug naar Stap1)
# Details:
# Per vandaag is bepaald dat:
# 0 tot 20 = prima
# 20 tot 30 = 100SRD boete
# 30 tot 40 = 250SRD boete
# 40 tot 50 = 400 SRD boete
# 50 en meer = voertuig in beslag!
# We sluiten af met “exit”.
# Noot: de politie voert voor het gemak niet “%” in. Dus bijv 3, 44, 14 of 32. Maar geen 5%, 16%, 31%.
# Noot2: De opdracht werkt met fictieve tint-percentage boeteverhoudingen. In werkelijkheid krijg je just geen boete voorbijv een 90% tint, omdat deze zeer licht-doorlatend is. (Thanks Preshan).

$percentage = null;

while($percentage != "exit") {
  echo "\nBekijk prijs per tint-percentage\n1)0-20\n2)20-30\n3)30-40\n4)40-50\n5)50 >\n\n";
  $percentage = (int) input();
  if($percentage == "exit") {
    echo "\nHave a nice day :)";
    break;
  } elseif($percentage == 1) {      // $percentage >= 0 && $percentage <= 20
    echo "\n0-20\nGeen boete\n";
  } elseif($percentage == 2) {      // $percentage > 20 && $percentage <= 30
    echo "\n20-30\nBoete = SRD 100\n";
  } elseif($percentage == 3) {      // $percentage > 30 && $percentage <= 40
    echo "\n30-40\nBoete = SRD 250\n";
  } elseif($percentage == 4) {      // $percentage > 40 && $percentage <= 50
    echo "\n40-50\nBoete = SRD 400\n";
  } elseif($percentage == 5) {      // $percentage 50 >
    echo "\n50+\nVoertuig in beslag!\n";
  } else echo "\nInvalid waarde\n";
}

?>
