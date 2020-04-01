
<?php
require('lib.inc.php');


//----------------------------------------------------------
//----------------------------------------------------------
//--- Bespreking van de text-replace. do's en dont's....
/*
$original = 'dit is de test tekst voor onze CASE!';
$newtext = str_replace('a', 'y', $original);
$newtext = str_replace('b', 'r', $newtext);
$newtext = str_replace('c', 'd', $newtext);

echo("$original\n");
echo("$newtext\n");

die();

*/

//----------------------------------------------------------
//----------------------------------------------------------
//--- Bespreking van de random generated numbers zonder duplicaten....
$geheugen = array();
$gevonden = false;

while(count($geheugen)!=5)//(**zolang het geugen kleinder is dan 5 (Want we zullen tot 5 getallen erin opslaan)**)
{
	$gekozen  = rand(1, 5);      // maak een random keuze

	$gevonden = array_search($gekozen, $geheugen);

	if($gevonden === false)      // als de keuze niet is gevonden in het geheugen | deze code moet je 3 === hebben. Niet 2 ==
	{
		//echo($gekozen);         //echo de keuze naar het scherm
		$geheugen[] = $gekozen; // sla de keuze op in het geheugen
		print_r($geheugen);
	}
}

die();



//----------------------------------------------------------
//----------------------------------------------------------
//--- Bespreking van een mogelijke loop om getallen te blijven
//--- invoeren en die meteen op te tellen...
/*
$som = 0;
$invoer = "";

while(1==1)
{
	$invoer = input();
	if($invoer == "") break;
	$som = $som + (float) $invoer;
}

//OF het kan ook zo:.......
$som = 0;
$invoer = "0";

do
{
	$som = $som + (float) $invoer;
	$invoer = input();
}
while($invoer != "")
*/


//----------------------------------------------------------
//----------------------------------------------------------
//--- Bespreking van een mogelijke loop om getallen te blijven
//--- invoeren en die meteen op te tellen...
/*
$getallen = array();
$invoer = "";

do
{
	$invoer = input();
	$getallen[] = (float) $invoer;   //plaats de input als een element van type float in de array
}
while($invoer != "")

$aantal_getallen = count($getallen); //hoeveel elementen in de array
print_r($getallen);                  //print een array
*/


?>
