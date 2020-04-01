<?php
require('lib.inc.php');

/*

#incl.05 Crypto-chat
Een programma die enkele tekens swapt om en de output achterstevoren laat zie, om zodoende onze eigen simple-secret-chat-programma te maken.
Details: 'a' => 'y', 'y' => 'a', 'g' => 'd', 'd' => 'g', 't' => 'k', 'k' => 't'
voorbeeld.
in: Hallo World! Good.
out:  .good !glroW ollyH

*/

// $letters = array('a:y', 'y:a', 'g:d', 'd:g', 't:k', 'k:t');
/*
$in = "Hallo World! Good.";
$letter = array('a', 'y', 'g', 'd', 't', 'k');
$replace = array('y','a','d','g','k','t');
$out = strrev(str_replace($letter, $replace, $in, $count));
echo $count;
echo $out;
*/
/*
foreach ($letters as $l) {
  $out = strrev($in);
  echo $out;
}
*/
/*
for($i=0; $i<strlen($in); $i++) {
  $out = strrev($in);
  $out .= $letters[$in[$i]];
}
//echo $output;
//$out = strrev($out);

echo $out;
*/

$letters = array('a', 'y', 'g', 'd', 't', 'k');
$verpl = array('y', 'a', 'd', 'd', 'k', 't');
$text = (string) "Hallo World! Good.";

$newtext = str_replace($letters, $verpl, $text);

echo $newtext;
//print_r($text);

//print_r($letters);

?>
