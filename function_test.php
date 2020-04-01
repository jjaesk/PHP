<?PHP require('lib.inc.php');

//this function performs math operations on an array of values.
function in_class_math($waarden_array, $to_do){
  if($to_do == "*") $totaal = 1;
  else   $totaal = 0;

  foreach($waarden_array as $value){
    if($to_do == '+') $totaal = $totaal + $value;
    elseif($to_do == '-') $totaal = $totaal - $value;
    elseif($to_do == '*') $totaal = $totaal * $value;
    else return null;
  }
  return $totaal;
}

$getallen = array();
echo("vul uw getal in:");
while(1==1){
  $in = input();
  if($in == "") break;
  $getallen[] = $in;
}

$resultaat = in_class_math($getallen, '+');
echo("\nHet resultaat is: " . $resultaat);
?>
