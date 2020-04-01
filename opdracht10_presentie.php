<?php
require('lib.inc.php');

// Opdracht 10

//$timezone_idetifier = DateTimeZone::listIdentifiers();
//foreach ($timezone_idetifier as $key => $list) {
//  echo $list . "\n";
//}

$timezoneset = date_default_timezone_set("America/Fortaleza");
$timezoneget = date_default_timezone_get();
$name = array();
$temp = null;

echo "Voer uw naam in:\n";

while($temp != "exit") {
  $date = date('D d M Y H:i:s');
  $temp = input();
  $presentie = "$temp heeft ingelogd op $date\n";
  if($temp == "" || $temp == "exit") break; // fgets(STDIN)
  $name[] = $presentie;
  //if(strtolower($temp == "exit")) break;
}
echo "\n~~~STUDENTEN~~~\n\n";
foreach ($name as $studenten) {
  echo "$studenten";
}
echo "\nEND"
//var_dump($name);
//echo $name;
//print_r($name);

?>
