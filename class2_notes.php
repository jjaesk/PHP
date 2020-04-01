<?php
require('lib.inc.php');
/*
$age = array();
$sum = 0;

// laten wij vragen naar waarden. Dit blijven we doen totdat men
// met QUIT eruit gaat.

echo "Enter UP TO 3 numbers. Finish with QUIT.\n";
while(1==1) {
  $temp = input();
  if(strtolower($temp) == "quit") break;
  else $age[] = (float) $temp;
}

//var_dump($age);

$aantal = count($age);

foreach($age as $v)
  $sum += $v;

echo "de som is: $sum \n";
echo "het gemiddelde is:" . ($sum / $aantal);
*/

echo "wat is uw geslacht ?\n";
$m = array();
$v = array();
//$gender = input();

while(1==1/*$gender =="m" || $gender =="v"*/) {
  $gender = input();
  if($gender == "m") {
    $m[] = $gender;
  } elseif($gender == "v") {
    $v[] = $gender;
  } elseif(strtolower($gender == "exit")) break;
}

$aantal = count($m);
echo "Aantal mannen = $aantal";

?>
