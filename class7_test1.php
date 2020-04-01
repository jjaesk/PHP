
<?php
require('lib.inc.php');

$voornaam   = array('Kim', 'Fabian', 'Archimedeszzzz', 'Xi');
$achternaam = array('Walaba', 'Lewis', 'Botervis', 'Yua');


/*
//eerste uitwerking:
$i = 0;
while($i < count($voornaam)){
	echo($voornaam[$i] . ' ' . $achternaam[$i] . "\n");
	$i++;
}
*/

//$namen = mooie_print($voornaam, $achternaam, 15, 15);
$namen = mooie_print2($voornaam, $achternaam);

print_r($namen);



function mooie_print($arr1, $arr2, $length1, $length2)
{
	$ret = array();
	$i = 0;
	while($i < count($arr1)){
		$ret[] = str_pad($arr1[$i], $length1) . ' ' . str_pad($arr2[$i], $length2);
		$i++;
	}
	return $ret;
}

function mooie_print2($arr1, $arr2)
{
	$ret = array();
	$length1 = 0;
	$length2 = 0;
	$i = 0;


	//zoek de langste naam
	foreach($arr1 as $value){
		if(strlen($value) > $length1 ) $length1 = strlen($value);
		$length1+=3;
	} //extra breedte omdat er twee sterren en een spatie moeten.

	//zoek de langste naam
	foreach($arr2 as $value){
		if(strlen($value) > $length2 ) $length2 = strlen($value);
		$length2++;
	} //extra breedte omdat er een spatie moet.


	//bouw de array die je terug zal geven.
	while($i < count($arr1)){
		$ret[] = str_pad('*' . $arr1[$i] . '*', $length1) . ' ' . str_pad($arr2[$i], $length2);
		$i++;
	}
	return $ret;
}


?>
