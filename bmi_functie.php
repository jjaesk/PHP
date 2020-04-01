<?php
require('lib.inc.php');


//metric = kg en cm
function bmi_formula($arr, $mod){   // ($gew, $len, $mod)
  $gew = $arr[0];
  $len = $arr[1];
  if($mod == 'kg'){         // Berekening voor KG en CM
    $bmi = $gew / ($len*$len);
  }
  elseif($mod == 'lbs'){   // Berekening voor LBS en INCH
    $bmi = ($gew * 703) / ($len*$len);
  }
  return $bmi;
}
//$arr = array(50, 1.80);     //('gewicht' => '', 'lengte' => '')
$arr = array();

echo "Voer gewicht in kg..\n";
$gew = input();
$arr[] = $gew;

echo "\nVoer lengte in m..\n";
$len = input();
$arr[] = $len;

echo bmi_formula($arr, 'kg');

/*

// TEST \\
$gew = 50;
$len = 1.80;
$mod = 'kg';

$info = array(50, 1.80);
echo bmi_formula($gew, $len, $mod);


//$arr[0] = $gew;      // ['gewicht']
//$arr[1] = $len;
*/

?>
