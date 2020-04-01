<?php
require('lib.inc.php');

/*
//$input = "AA trreenndd aannaallyyssiiss iiss a mmeetthoodd ooff aannaallyyssiiss";
$input = "aa";
$n=1;
$output = null;

for ($i=0; $i<strlen($input); $i++) {
  for ($j=0; $j<$n ; $j++) {
    $output .= $input[$i];
  }
}
echo $output;
*/

$lengte = array();
echo "Voer een paar lengtes in:\n";

while(1==1) {
  $input = input();
  if($input == "exit") break;
  $lengte[] = $input;
}
var_dump($lengte);

foreach($lengte as $l){
  if($lengte < 1.40) echo "$l, jij bent kort";
  elseif($lengte > 1.60) echo "$l jij bent lang";
  else echo "jouw lengte is $l";
}

?>
